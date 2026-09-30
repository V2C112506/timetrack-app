(function () {
  var routes = {
    dashboard: '/super-admin',
    businesses: '/super-admin/businesses',
    'subscriptions-billing': '/super-admin/subscriptions-billing',
    'plans-pricing': '/super-admin/plans-pricing',
    'platform-analytics': '/super-admin/platform-analytics',
    'customer-activity': '/super-admin/customer-activity',
    'support-tickets': '/super-admin/support-tickets',
    'platform-health': '/super-admin/platform-health',
    'system-settings': '/super-admin/system-settings',
    'super-admin-profile': '/super-admin/profile'
  };
  var aliases = {
    'dashboard-overview': 'dashboard',
    'subscription-billing': 'subscriptions-billing'
  };
  var labels = {
    dashboard: 'Dashboard',
    businesses: 'Businesses',
    'subscriptions-billing': 'Subscriptions & Billing',
    'plans-pricing': 'Plans & Pricing',
    'platform-analytics': 'Platform Analytics',
    'customer-activity': 'Customer Activity',
    'support-tickets': 'Support Tickets',
    'platform-health': 'Platform Health',
    'system-settings': 'System Settings'
  };
  var icons = {
    dashboard: 'dashboard', businesses: 'domain', 'subscriptions-billing': 'payments',
    'plans-pricing': 'sell', 'platform-analytics': 'analytics', 'customer-activity': 'history',
    'support-tickets': 'confirmation_number', 'platform-health': 'dns', 'system-settings': 'tune'
    , 'super-admin-profile': 'badge'
  };
  var activeClasses = ['bg-primary-container', 'text-on-primary-container', 'font-semibold', 'rounded-lg', 'shadow-sm'];
  var inactiveClasses = ['text-on-surface-variant'];
  var current = window.location.pathname.split('/').filter(Boolean).pop() || 'super-admin';
  current = current === 'super-admin' ? 'dashboard' : (aliases[current] || current);
  if (current === 'profile') current = 'super-admin-profile';

  document.querySelectorAll('aside').forEach(function (aside) {
    aside.classList.remove('bg-surface-container-low');
    aside.classList.remove('h-full', 'py-space-md');
    aside.classList.add('h-screen', 'bg-surface-container-lowest');
    var logo = aside.querySelector('img');
    if (logo) {
      logo.src = '/images/timetrack-logo.svg';
      logo.alt = 'TimeTrack logo';
    }
    aside.querySelectorAll('span').forEach(function (span) {
      var value = span.textContent.trim();
      if (value === 'OWNER') span.textContent = 'SUPER ADMIN';
      if (value === 'SaaS Operations') span.textContent = 'Control Plane';
    });
    var nav = aside.querySelector('nav');
    if (nav) {
      nav.classList.remove('gap-space-xs', 'px-space-md');
      nav.classList.add('gap-1', 'px-space-md');
    }
    aside.querySelectorAll('a[href]').forEach(function (item) {
      if (!item.dataset.path) {
        var routePath = item.getAttribute('href').split('?')[0].replace(/\/$/, '').split('/').pop();
        item.dataset.path = routePath === 'super-admin' ? 'dashboard' : routePath;
      }
    });
    aside.querySelectorAll('[data-path]').forEach(function (item) {
      var canonical = aliases[item.dataset.path] || item.dataset.path;
      if (!routes[canonical]) return;
      item.href = routes[canonical];
      item.dataset.path = canonical;
      item.classList.remove('py-space-sm');
      item.classList.add('flex', 'items-center', 'gap-space-sm', 'px-space-md', 'py-2.5', 'font-label-md', 'text-label-md', 'transition-colors');
      item.classList.remove(...activeClasses, ...inactiveClasses);
      item.classList.add(...(canonical === current ? activeClasses : inactiveClasses));
      if (canonical === current) item.setAttribute('aria-current', 'page');
      var icon = item.querySelector('.material-symbols-outlined');
      if (!icon) {
        icon = document.createElement('span');
        icon.className = 'material-symbols-outlined text-[20px]';
        item.prepend(icon);
      }
      icon.textContent = icons[canonical];
      Array.from(item.childNodes).forEach(function (node) {
        if (node.nodeType === Node.TEXT_NODE && node.textContent.trim()) node.remove();
      });
      var text = item.querySelector('.nav-label');
      if (!text) {
        text = Array.from(item.querySelectorAll('span')).find(function (candidate) {
          return !candidate.classList.contains('material-symbols-outlined')
            && !candidate.className.includes('bg-')
            && candidate.textContent.trim()
            && !/^\d/.test(candidate.textContent.trim());
        });
      }
      if (!text) {
        text = document.createElement('span');
        text.className = 'nav-label';
        item.appendChild(text);
      } else {
        text.classList.add('nav-label');
      }
      text.textContent = labels[canonical];
    });
  });
})();
