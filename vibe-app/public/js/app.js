(function () {
    document.querySelectorAll('a[href="#employees"]').forEach(function (link) {
        link.href = '/admin/employees';
    });

    const clock = document.getElementById('live-clock');
    const period = document.getElementById('live-period');
    const date = document.getElementById('current-date');
    const punchButton = document.getElementById('punch-button');
    const punchLabel = document.getElementById('punch-label');

    function updateTime() {
        const now = new Date();
        const parts = new Intl.DateTimeFormat('en-US', { hour: '2-digit', minute: '2-digit', second: '2-digit', hour12: true, timeZone: 'Asia/Singapore' }).formatToParts(now);
        const values = Object.fromEntries(parts.map(function (part) { return [part.type, part.value]; }));
        if (clock) clock.textContent = values.hour + ':' + values.minute + ':' + values.second;
        if (period) period.textContent = values.dayPeriod;
        if (date) date.textContent = new Intl.DateTimeFormat('en-US', { weekday: 'long', month: 'short', day: 'numeric', year: 'numeric', timeZone: 'Asia/Singapore' }).format(now);
    }

    updateTime();
    window.setInterval(updateTime, 1000);

    if (punchButton) {
        punchButton.addEventListener('click', function () {
            const active = punchButton.dataset.clockedIn === 'true';
            punchButton.dataset.clockedIn = String(!active);
            if (punchLabel) punchLabel.textContent = active ? 'TIME IN NOW' : 'TIME OUT NOW';
            punchButton.classList.toggle('is-active', !active);
        });
    }

    const toggleButton = document.getElementById('toggle-pwd-btn');
    const passwordInput = document.getElementById('password-input');
    const passwordIcon = document.getElementById('pwd-icon');
    if (toggleButton && passwordInput && passwordIcon) {
        toggleButton.addEventListener('click', function () {
            const hidden = passwordInput.type === 'password';
            passwordInput.type = hidden ? 'text' : 'password';
            passwordIcon.textContent = hidden ? 'visibility_off' : 'visibility';
            toggleButton.setAttribute('aria-label', hidden ? 'Hide password' : 'Show password');
        });
    }

    const submitButton = document.getElementById('submitBtn');
    if (submitButton) {
        submitButton.addEventListener('click', function () {
            submitButton.disabled = true;
            submitButton.innerHTML = '<span class="material-symbols-outlined">progress_activity</span>Securing Punch Record...';
            window.setTimeout(function () {
                submitButton.classList.add('is-success');
                submitButton.innerHTML = '<span class="material-symbols-outlined">check_circle</span>Clocked In Successfully!';
                window.setTimeout(function () {
                    window.location.href = '/history';
                }, 700);
            }, 1100);
        });
    }

    const faceGuide = document.querySelector('.face-guide');
    if (faceGuide) {
        faceGuide.addEventListener('click', function () {
            faceGuide.innerHTML = '<span class="material-symbols-outlined">check_circle</span>Face ID Verified';
            faceGuide.classList.add('face-verified');
        });
    }
    const locationBadge = document.querySelector('.location-badge');
    if (locationBadge) {
        locationBadge.addEventListener('click', function () {
            locationBadge.innerHTML = '<span class="material-symbols-outlined">sync</span>Checking GPS...';
            if (!navigator.geolocation) {
                locationBadge.innerHTML = '<span class="material-symbols-outlined">pin_drop</span>Location Verified ±2.8m';
                return;
            }
            navigator.geolocation.getCurrentPosition(function () {
                locationBadge.innerHTML = '<span class="material-symbols-outlined">check_circle</span>Location Verified ±2.8m';
            }, function () {
                locationBadge.innerHTML = '<span class="material-symbols-outlined">warning</span>GPS permission needed';
                locationBadge.classList.add('location-pending');
            }, { enableHighAccuracy: true, timeout: 5000 });
        });
    }
    const retakeButton = document.querySelector('.retake-button');
    if (retakeButton && faceGuide && !document.getElementById('confirm-timeout-btn')) {
        retakeButton.onclick = function () {
            faceGuide.classList.remove('face-verified');
            faceGuide.innerHTML = '<span class="material-symbols-outlined">center_focus_strong</span>Retake ready - center your face';
            document.getElementById('submitBtn')?.removeAttribute('disabled');
        };
    }
    const confirmTimeoutButton = document.getElementById('confirm-timeout-btn');
    if (confirmTimeoutButton) {
        confirmTimeoutButton.addEventListener('click', function (event) {
            event.preventDefault();
            confirmTimeoutButton.disabled = true;
            confirmTimeoutButton.innerHTML = '<span class="material-symbols-outlined">progress_activity</span>Registering Time Out...';
            window.setTimeout(function () {
                confirmTimeoutButton.classList.add('is-success');
                confirmTimeoutButton.innerHTML = '<span class="material-symbols-outlined">check_circle</span>Shift Concluded!';
                document.getElementById('timeout-confirm-form')?.submit();
            }, 1100);
        });
    }

    document.querySelectorAll('.history-page .accordion-trigger').forEach(function (trigger) {
        trigger.addEventListener('click', function () {
            const drawer = document.getElementById('drawer-' + trigger.dataset.toggle);
            const icon = trigger.querySelector('.material-symbols-outlined');
            if (!drawer) return;
            const open = drawer.classList.toggle('is-open');
            icon.style.transform = open ? 'rotate(180deg)' : 'rotate(0deg)';
            trigger.querySelector('span').textContent = open ? 'Hide Details' : trigger.dataset.toggle === 'history-record-1' ? 'Show Verification Audit' : trigger.dataset.toggle === 'history-record-2' ? 'View Audit Credentials' : 'Show Exception Ticket';
        });
    });

    const historyRecords = Array.from(document.querySelectorAll('.history-record'));
    document.querySelectorAll('.history-filter').forEach(function (filterButton) {
        filterButton.addEventListener('click', function () {
            document.querySelectorAll('.history-filter').forEach(function (button) { button.classList.remove('active'); });
            filterButton.classList.add('active');
            const filter = filterButton.dataset.filter;
            historyRecords.forEach(function (record) { record.style.display = filter === 'all' || record.dataset.status === filter ? '' : 'none'; });
        });
    });

    const exportSheet = document.getElementById('export-sheet');
    const toast = document.getElementById('toast-banner');
    function showHistoryToast(message) {
        if (!toast) return;
        document.getElementById('toast-text').textContent = message;
        toast.classList.add('is-open');
        window.setTimeout(function () { toast.classList.remove('is-open'); }, 3000);
    }
    document.getElementById('open-export-modal')?.addEventListener('click', function () { exportSheet.classList.add('is-open'); });
    document.getElementById('close-export-modal')?.addEventListener('click', function () { exportSheet.classList.remove('is-open'); });
    document.getElementById('confirm-download-btn')?.addEventListener('click', function () {
        const format = document.querySelector('input[name="format"]:checked')?.value || 'pdf';
        exportSheet.classList.remove('is-open');
        showHistoryToast('Preparing ' + format.toUpperCase() + ' export for September 2026...');
    });
    document.getElementById('prev-month')?.addEventListener('click', function () { document.getElementById('month-label').textContent = 'August 2026'; showHistoryToast('Loaded August 2026 records'); });
    document.getElementById('next-month')?.addEventListener('click', function () { document.getElementById('month-label').textContent = 'September 2026'; showHistoryToast('Viewing current period'); });

    const employeeSearch = document.getElementById('employee-search');
    if (employeeSearch) {
        employeeSearch.addEventListener('input', function () {
            const query = employeeSearch.value.toLowerCase().trim();
            document.querySelectorAll('.roster-table tbody tr').forEach(function (row) {
                row.style.display = !query || row.textContent.toLowerCase().includes(query) ? '' : 'none';
            });
        });
    }

    document.querySelectorAll('.admin-nav a').forEach(function (link) {
        const label = link.textContent.trim();
        if (label === 'Employee Directory') link.setAttribute('href', '/admin/employees');
        if (label === 'Live Attendance Feed') link.setAttribute('href', '/admin/live-attendance');
        if (label === 'Shifts & Schedules') link.setAttribute('href', '/admin/shifts-schedules');
        if (label === 'Attendance Reports') link.setAttribute('href', '/admin/attendance-reports');
        if (label === 'Dashboard') link.setAttribute('href', '/admin');
    });
    document.querySelector('[data-path="live-attendance-feed"]')?.setAttribute('href', '/admin/live-attendance');
    document.querySelector('[data-path="shifts-and-schedules"]')?.setAttribute('href', '/admin/shifts-schedules');
    document.querySelector('[data-path="attendance-reports"]')?.setAttribute('href', '/admin/attendance-reports');
    document.querySelector('[data-path="dashboard"]')?.setAttribute('href', '/admin');

    const adminNavLinks = document.querySelectorAll('.admin-nav a');
    if (adminNavLinks.length) {
        const currentPath = window.location.pathname.replace(/\/$/, '') || '/';
        const activeClasses = ['active', 'bg-primary', 'text-on-primary', 'shadow-sm'];
        adminNavLinks.forEach(function (link) {
            const linkUrl = new URL(link.href, window.location.origin);
            const selected = linkUrl.pathname.replace(/\/$/, '') === currentPath;
            link.classList.remove(...activeClasses);
            link.classList.add('text-on-surface-variant');
            if (selected) {
                link.classList.add(...activeClasses);
                link.classList.remove('text-on-surface-variant');
            }
        });
        adminNavLinks.forEach(function (link) {
            link.addEventListener('click', function () {
                adminNavLinks.forEach(function (item) {
                    item.classList.remove(...activeClasses);
                    item.classList.add('text-on-surface-variant');
                });
                link.classList.add(...activeClasses);
                link.classList.remove('text-on-surface-variant');
            });
        });
    }

    const directorySearch = document.getElementById('directory-table-search');
    if (directorySearch) {
        directorySearch.addEventListener('input', function () {
            const query = directorySearch.value.toLowerCase().trim();
            document.querySelectorAll('.directory-table tbody tr').forEach(function (row) {
                row.style.display = !query || row.textContent.toLowerCase().includes(query) ? '' : 'none';
            });
        });
    }
    document.querySelectorAll('.edit-employee').forEach(function (button) {
        button.addEventListener('click', function () {
            const row = button.closest('tr');
            const name = row?.querySelector('td strong')?.textContent || 'Employee';
            const selected = document.getElementById('selected-employee');
            if (selected) selected.textContent = name;
            document.querySelector('.profile-editor')?.scrollIntoView({ behavior: 'smooth', block: 'start' });
        });
    });
    const directoryToast = document.getElementById('directory-toast');
    function showDirectoryToast(message) {
        if (!directoryToast) return;
        document.getElementById('directory-toast-text').textContent = message;
        directoryToast.classList.add('is-open');
        window.setTimeout(function () { directoryToast.classList.remove('is-open'); }, 2600);
    }
    document.getElementById('save-profile')?.addEventListener('click', function () { showDirectoryToast('Profile saved successfully'); });
    document.getElementById('add-employee')?.addEventListener('click', function () { window.location.href = '/admin/employees/create'; });
    if (directoryToast && new URLSearchParams(window.location.search).get('registered') === '1') {
        showDirectoryToast('Employee registered. They can now sign in with the registered email and password.');
    }

    if (document.querySelector('.admin-page:not(.directory-page)')) {
        document.querySelector('.admin-actions .alert-action')?.addEventListener('click', function () { document.getElementById('live-feed')?.scrollIntoView({ behavior: 'smooth' }); });
        document.querySelector('.admin-actions .primary-admin')?.addEventListener('click', function () { document.getElementById('audit')?.scrollIntoView({ behavior: 'smooth' }); });
        document.querySelector('.admin-actions button:first-child')?.addEventListener('click', function () { window.alert('Roster export is ready to connect to your CSV service.'); });
        document.querySelector('.admin-icon-button')?.addEventListener('click', function () { window.alert('You have 3 attendance alerts requiring review.'); });
        document.querySelectorAll('.site-chips button').forEach(function (chip) { chip.addEventListener('click', function () { document.querySelectorAll('.site-chips button').forEach(function (item) { item.classList.remove('active'); }); chip.classList.add('active'); }); });
        document.querySelectorAll('.review-button,.exception-row button').forEach(function (button) { button.addEventListener('click', function () { window.alert('Review workspace opened for this attendance exception.'); }); });
    }

    const profileToast = document.getElementById('profile-toast');
    function showProfileToast(message) {
        if (!profileToast) return;
        document.getElementById('profile-toast-text').textContent = message;
        profileToast.classList.add('is-open');
        window.setTimeout(function () { profileToast.classList.remove('is-open'); }, 2600);
    }
    document.getElementById('reenroll-face')?.addEventListener('click', function () { showProfileToast('Face ID re-enrollment started'); });
    document.getElementById('change-pin')?.addEventListener('click', function () { showProfileToast('Security PIN update is ready'); });
    document.getElementById('correction-request')?.addEventListener('click', function () { showProfileToast('Attendance correction request started'); });
    document.querySelectorAll('.profile-toggle').forEach(function (toggle) {
        toggle.addEventListener('click', function () {
            const state = toggle.querySelector('.toggle-on');
            state.textContent = state.textContent === 'ON' ? 'OFF' : 'ON';
            state.style.background = state.textContent === 'ON' ? 'var(--primary)' : 'var(--line)';
            showProfileToast(state.textContent === 'ON' ? 'Preference enabled' : 'Preference disabled');
        });
    });
})();
