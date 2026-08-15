// Navbar scroll effects
const navbar = document.getElementById('navbar');
if (navbar) {
    window.addEventListener('scroll', () => {
        if (window.scrollY > 10) {
            navbar.classList.add('shadow-lg', 'border-gray-100/80');
            navbar.classList.remove('border-transparent');
        } else {
            navbar.classList.remove('shadow-lg', 'border-gray-100/80');
            navbar.classList.add('border-transparent');
        }
    });
}

// Mobile menu toggle
const menuToggle = document.getElementById('menu-toggle');
const mobileMenu = document.getElementById('mobile-menu');
const iconOpen = document.getElementById('menu-icon-open');
const iconClose = document.getElementById('menu-icon-close');

if (menuToggle && mobileMenu) {
    menuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
        iconOpen.classList.toggle('hidden');
        iconClose.classList.toggle('hidden');
    });
}

// Notify modal
const notifyModal = document.getElementById('notify-modal');
const notifyOpenBtn = document.getElementById('notify-open');
const notifyCloseBtn = document.getElementById('notify-modal-close');
const notifyBackdrop = document.getElementById('notify-modal-backdrop');
const notifyForm = document.getElementById('notify-form');
const notifySubmitBtn = document.getElementById('notify-submit');
const notifySubmitLabel = notifySubmitBtn ? notifySubmitBtn.querySelector('span') : null;
const notifyModalBody = document.getElementById('notify-modal-body');
const csrfToken = document.querySelector('meta[name="csrf-token"]');

let lastFocused = null;

function setNotifyError(fieldName, message) {
    const errorEl = notifyForm.querySelector(`.notify-error[data-for="${fieldName}"]`);
    const input = notifyForm.querySelector(`[name="${fieldName}"]`);
    if (errorEl && message) {
        errorEl.textContent = message;
        errorEl.classList.remove('hidden');
        input.classList.add('border-red-500', 'focus:ring-red-500', 'focus:border-red-500');
        input.classList.remove('focus:ring-brand-orange', 'focus:border-brand-orange');
    } else if (errorEl) {
        errorEl.textContent = '';
        errorEl.classList.add('hidden');
        input.classList.remove('border-red-500', 'focus:ring-red-500', 'focus:border-red-500');
        input.classList.add('focus:ring-brand-orange', 'focus:border-brand-orange');
    }
}

function clearNotifyErrors() {
    document.querySelectorAll('.notify-error').forEach((el) => {
        el.textContent = '';
        el.classList.add('hidden');
    });
    notifyForm.querySelectorAll('input').forEach((input) => {
        input.classList.remove('border-red-500', 'focus:ring-red-500', 'focus:border-red-500');
        input.classList.add('focus:ring-brand-orange', 'focus:border-brand-orange');
    });
}

function showNotifySuccess(message) {
    notifyModalBody.innerHTML = `
        <div class="text-center py-6">
            <div class="w-14 h-14 mx-auto rounded-full bg-green-100 flex items-center justify-center mb-5">
                <svg class="w-7 h-7 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
            </div>
            <h3 class="text-lg font-semibold text-brand-navy mb-2">${message}</h3>
            <p class="text-sm text-brand-navy/60 mb-6">We'll be in touch when the feature launches.</p>
            <button type="button" id="notify-success-close" class="inline-flex items-center justify-center px-6 py-3 text-sm font-semibold text-white bg-brand-orange rounded-xl hover:bg-orange-600 transition-all duration-200">
                Close
            </button>
        </div>`;

    document.getElementById('notify-success-close').addEventListener('click', closeNotifyModal);
    notifyModal.querySelector('#notify-modal-close').addEventListener('click', closeNotifyModal);
}

function openNotifyModal() {
    lastFocused = document.activeElement;
    clearNotifyErrors();
    notifyForm.reset();
    notifyModal.classList.remove('hidden');
    notifyModal.classList.add('flex');
    notifyModal.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
    document.getElementById('notify-name').focus();
}

function closeNotifyModal() {
    notifyModal.classList.add('hidden');
    notifyModal.classList.remove('flex');
    notifyModal.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
    if (lastFocused) lastFocused.focus();
}

if (notifyModal) {
    notifyOpenBtn.addEventListener('click', openNotifyModal);
    notifyCloseBtn.addEventListener('click', closeNotifyModal);
    notifyBackdrop.addEventListener('click', closeNotifyModal);
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && !notifyModal.classList.contains('hidden')) {
            closeNotifyModal();
        }
    });
}

if (notifyForm) {
    notifyForm.addEventListener('submit', async (e) => {
        e.preventDefault();
        clearNotifyErrors();

        const formData = new FormData(notifyForm);
        const name = formData.get('name').trim();
        const email = formData.get('email').trim();
        const phone = formData.get('phone').trim();

        let hasErrors = false;
        if (!name) {
            setNotifyError('name', 'Please enter your name.');
            hasErrors = true;
        }
        if (!email) {
            setNotifyError('email', 'Please enter your email address.');
            hasErrors = true;
        } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
            setNotifyError('email', 'Please enter a valid email address.');
            hasErrors = true;
        }
        if (hasErrors) return;

        notifySubmitBtn.disabled = true;
        notifySubmitLabel.textContent = 'Submitting...';

        try {
            const response = await fetch('/notify-me', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': csrfToken ? csrfToken.content : '',
                },
                body: JSON.stringify({ name, email, phone: phone || null }),
            });

            const data = await response.json();

            if (response.ok) {
                showNotifySuccess(data.message || "Thanks! We'll notify you when we launch.");
            } else if (response.status === 422 && data.errors) {
                Object.entries(data.errors).forEach(([field, messages]) => {
                    setNotifyError(field, messages[0]);
                });
            } else {
                throw new Error(data.message || 'Something went wrong.');
            }
        } catch (error) {
            setNotifyError('email', error.message || 'Something went wrong. Please try again.');
        } finally {
            notifySubmitBtn.disabled = false;
            if (notifySubmitLabel) notifySubmitLabel.textContent = 'Notify Me';
        }
    });
}
