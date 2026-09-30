<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="web_dashboard" name="shell-type"/>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Plus+Jakarta+Sans:wght@600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<style>
@layer base {
  html, body {
    margin: 0;
    padding: 0;
  }
  body {
    overscroll-behavior: none;
  }
  main > :first-child {
    margin-top: 0 !important;
  }
  main > :last-child {
    margin-bottom: 0 !important;
  }
}
::-webkit-scrollbar {
  display: none;
}
</style>
<script src="https://cdn.tailwindcss.com"></script>
<script id="tailwind-config">
tailwind.config = {
  darkMode: "class",
  theme: {
    extend: {
      "colors": {
        "secondary-fixed": "#ffdadb",
        "on-primary-fixed": "#40000d",
        "outline": "#8a7172",
        "inverse-surface": "#3a2d2d",
        "secondary-fixed-dim": "#ffb2b7",
        "surface-container-low": "#fff0f0",
        "tertiary": "#006a3b",
        "primary-fixed-dim": "#ffb2b7",
        "error": "#ba1a1a",
        "on-tertiary-container": "#f6fff4",
        "outline-variant": "#debfc0",
        "on-secondary": "#ffffff",
        "on-secondary-fixed-variant": "#6d363b",
        "on-surface": "#241919",
        "primary-fixed": "#ffdadb",
        "tertiary-fixed-dim": "#5ede92",
        "on-surface-variant": "#574142",
        "on-error": "#ffffff",
        "on-secondary-fixed": "#380c12",
        "background": "#fff8f7",
        "surface-container-lowest": "#ffffff",
        "inverse-on-surface": "#ffedec",
        "inverse-primary": "#ffb2b7",
        "primary": "#a63143",
        "secondary-container": "#ffb2b7",
        "surface-container-high": "#f9e3e3",
        "surface-bright": "#fff8f7",
        "primary-container": "#c64959",
        "on-primary": "#ffffff",
        "tertiary-container": "#00864c",
        "surface-tint": "#a93345",
        "on-secondary-container": "#7b4147",
        "surface-variant": "#f3dedd",
        "surface-container": "#ffe9e9",
        "on-primary-fixed-variant": "#891a2f",
        "surface-dim": "#ead5d5",
        "surface-container-highest": "#f3dedd",
        "surface": "#fff8f7",
        "on-tertiary-fixed": "#00210e",
        "on-tertiary": "#ffffff",
        "error-container": "#ffdad6",
        "on-error-container": "#93000a",
        "on-primary-container": "#fffbff",
        "on-background": "#241919",
        "tertiary-fixed": "#7cfbac",
        "on-tertiary-fixed-variant": "#00522c",
        "secondary": "#894d52"
      },
      "borderRadius": {
        "DEFAULT": "0.25rem",
        "lg": "0.5rem",
        "xl": "0.75rem",
        "full": "9999px"
      },
      "spacing": {
        "space-lg": "1.5rem",
        "gutter-tablet": "1.5rem",
        "margin": "1rem",
        "space-md": "1rem",
        "gutter": "1rem",
        "margin-desktop": "3rem",
        "margin-tablet": "2rem",
        "space-xs": "0.25rem",
        "gutter-desktop": "2rem",
        "space-sm": "0.5rem",
        "space-xl": "2rem"
      },
      "fontFamily": {
        "label-lg": ["Inter"],
        "mono-metric": ["Inter"],
        "label-sm": ["Inter"],
        "headline-sm": ["Plus Jakarta Sans"],
        "display-time-lg": ["Plus Jakarta Sans"],
        "body-lg": ["Inter"],
        "body-md": ["Inter"],
        "headline-md": ["Plus Jakarta Sans"],
        "body-sm": ["Inter"],
        "headline-lg": ["Plus Jakarta Sans"],
        "display-time-mobile": ["Plus Jakarta Sans"],
        "label-md": ["Inter"]
      },
      "fontSize": {
        "label-lg": ["14px", {"lineHeight": "20px", "letterSpacing": "0.01em", "fontWeight": "600"}],
        "mono-metric": ["15px", {"lineHeight": "20px", "letterSpacing": "0.02em", "fontWeight": "500"}],
        "label-sm": ["11px", {"lineHeight": "14px", "letterSpacing": "0.04em", "fontWeight": "600"}],
        "headline-sm": ["18px", {"lineHeight": "24px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
        "display-time-lg": ["48px", {"lineHeight": "52px", "letterSpacing": "-0.03em", "fontWeight": "700"}],
        "body-lg": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
        "body-md": ["14px", {"lineHeight": "20px", "fontWeight": "400"}],
        "headline-md": ["22px", {"lineHeight": "28px", "letterSpacing": "-0.015em", "fontWeight": "600"}],
        "body-sm": ["12px", {"lineHeight": "16px", "fontWeight": "400"}],
        "headline-lg": ["28px", {"lineHeight": "36px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
        "display-time-mobile": ["40px", {"lineHeight": "44px", "letterSpacing": "-0.025em", "fontWeight": "700"}],
        "label-md": ["12px", {"lineHeight": "16px", "letterSpacing": "0.02em", "fontWeight": "600"}]
      }
    }
  }
};
</script>
</head>
<body class="bg-background font-body-md text-on-surface antialiased">
<aside class="fixed left-0 top-0 h-full w-72 bg-surface-container-low z-50 flex flex-col justify-between py-space-md shadow-[0_1px_8px_rgba(0,0,0,0.04)]">
<div class="flex flex-col gap-space-md">
<div class="px-space-lg flex items-center gap-space-sm h-12">
<img alt="TimeTrack Super Admin" class="h-8 w-auto object-contain" src="https://lh3.googleusercontent.com/aida/AEtjO1WWP_i-caE0stILPpvuBK9nwR7PlE5Ht13hDuT6URQxi-QCzKMnd3RURJCxzn5YG56n6YUroRES6P6wRwQ4bCdU1MC2x8dVvCndz021dpkNv4dM0Q1MLBztRUhHRNW_FxnqT-QjZJPBQ6b5ueR2BUK40O3RJ_0aM_XqgMngE4MiyHOlAx_xN2StcWnVI9Zk7k5-jZjfsF1XvuGR1oMJy2NLyx3H0v3OwUE4QzzQoVoNatEi1LfndRq4oOAU"/>
<span class="font-headline-sm text-headline-sm text-primary font-bold tracking-tight">TimeTrack</span>
<span class="ml-auto px-space-xs py-0.5 rounded-full bg-primary-container text-on-primary-container font-label-sm text-label-sm tracking-wider uppercase">OWNER</span>
</div>
<div class="px-space-lg pt-space-xs">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">SaaS Operations</span>
</div>
<nav class="flex flex-col gap-space-xs px-space-md" data-active-classes="bg-primary-container text-on-primary-container font-bold rounded-lg shadow-sm">
<a class="flex items-center px-space-md py-space-sm rounded-lg text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-colors font-label-md text-label-md" data-path="dashboard-overview" href="#">Dashboard Overview</a>
<a class="flex items-center px-space-md py-space-sm rounded-lg text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-colors font-label-md text-label-md" data-path="subscription-billing" href="#">Subscription &amp; Billing</a>
<a aria-current="page" class="flex items-center px-space-md py-space-sm transition-colors bg-primary-container text-on-primary-container font-bold rounded-lg shadow-sm" data-path="platform-analytics" href="#">Platform Analytics</a>
<a class="flex items-center px-space-md py-space-sm rounded-lg text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-colors font-label-md text-label-md" data-path="customer-activity" href="#">Customer Activity</a>
<a class="flex items-center px-space-md py-space-sm rounded-lg text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-colors font-label-md text-label-md" data-path="support-tickets" href="#">Support Tickets</a>
<a class="flex items-center px-space-md py-space-sm rounded-lg text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-colors font-label-md text-label-md" data-path="platform-health" href="#">Platform Health</a>
<a class="flex items-center px-space-md py-space-sm rounded-lg text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-colors font-label-md text-label-md" data-path="system-settings" href="#">System Settings</a>
</nav>
</div>
<div class="px-space-md flex flex-col gap-space-sm">
<div class="p-space-md rounded-xl bg-surface-container flex flex-col gap-space-xs">
<div class="flex items-center gap-space-xs text-tertiary font-label-sm text-label-sm">
<span class="material-symbols-outlined text-sm">health_and_safety</span>
        All SaaS Systems 99.98%
      </div>
<div class="font-label-sm text-label-sm text-on-surface-variant">SaaS Admin Node v4.18.2</div>
</div>
</div>
</aside>
<div class="pl-72">
<header class="fixed top-0 left-72 right-0 h-16 bg-surface/85 backdrop-blur-xl z-40 flex items-center justify-between px-gutter-desktop shadow-[0_1px_8px_rgba(0,0,0,0.04)]">
<div class="flex items-center gap-space-md">
<div class="flex items-center gap-space-xs px-space-md py-space-xs rounded-full bg-surface-container font-label-md text-label-md text-on-surface">
<span class="material-symbols-outlined text-base text-primary">verified_user</span>
<span class="font-semibold">Global Cloud Platform</span>
<span class="text-outline-variant">/</span>
<span class="text-on-surface-variant">Multi-Tenant Root</span>
</div>
<div class="hidden lg:flex items-center gap-space-sm px-space-md py-1.5 rounded-full bg-surface-container-low">
<span class="material-symbols-outlined text-lg text-on-surface-variant">search</span>
<input class="bg-transparent border-0 outline-none text-on-surface font-body-sm text-body-sm w-72 placeholder:text-on-surface-variant" placeholder="Search tenants, MRR, subscriptions, tickets..." type="text"/>
</div>
</div>
<div class="flex items-center gap-space-md">
<button aria-label="Notifications" class="w-10 h-10 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-colors relative" type="button">
<span class="material-symbols-outlined text-xl">notifications</span>
<span class="absolute top-2 right-2 w-2 h-2 rounded-full bg-primary"></span>
</button>
<button aria-label="Quick Actions" class="w-10 h-10 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-colors" type="button">
<span class="material-symbols-outlined text-xl">bolt</span>
</button>
<div class="flex items-center gap-space-sm pl-space-sm border-l border-outline-variant/40">
<div class="text-right hidden sm:block">
<div class="font-label-md text-label-md text-on-surface">Devon Campbell</div>
<div class="font-label-sm text-label-sm text-on-surface-variant">Platform Owner</div>
</div>
<img alt="Devon Campbell Profile" class="w-9 h-9 rounded-full object-cover ring-2 ring-primary/20" src="https://lh3.googleusercontent.com/aida/AEtjO1XaCBK3w4MbyTDu4BNzinBTUC1BaSWGvH3pcRQpJeEAIj4XN5HfIxMlMkJeIU0sZpqBxe4PS-1rQ4xo_VFSM1cHTb7e7oKhKFp56ySKc0PhVWKb69U8aVAICvVkWavB4fjqp-I0ukClDi9vJmWxzFzF7J4j_uqI0i1O5SXNRoqf69eJOQV5LNgJugZxICc8YEdhlC7s27R8_NRGvBVbrNDk86YeILqJnnTM4XuZlwE2HBaSvk3AZpThIhEb"/>
</div>
</div>
</header>
<main class="relative pt-16 bg-background min-h-screen px-gutter-desktop py-space-lg"><div class="flex flex-col w-full">
<div class="flex flex-col gap-space-lg w-full max-w-[1400px] mx-auto pb-space-xl">
<!-- Top Action / Filtering Header -->
<div class="flex flex-col lg:flex-row lg:items-center justify-between gap-space-md">
<div class="flex flex-col gap-space-xs">
<div class="flex items-center gap-space-xs">
<span class="px-space-xs py-0.5 rounded-full bg-primary-container text-on-primary-container font-label-sm text-label-sm uppercase tracking-wider">Root Telemetry</span>
<span class="text-on-surface-variant font-label-sm text-label-sm">System Cluster 01 • Real-time</span>
</div>
<h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight font-bold">Platform Analytics &amp; Growth Telemetry</h1>
<p class="font-body-sm text-body-sm text-on-surface-variant">Global infrastructure metrics, biometric verification fidelity, and multi-tenant workforce behavior.</p>
</div>
<div class="flex flex-wrap items-center gap-space-sm">
<!-- Time Window Segmented Control -->
<div class="flex items-center p-1 rounded-full bg-surface-container shadow-sm">
<button class="px-space-md py-1 rounded-full text-on-surface-variant font-label-sm text-label-sm hover:text-on-surface transition-all" onclick="setTimeWindow(this, '7D')">7D</button>
<button class="px-space-md py-1 rounded-full bg-surface-container-lowest text-primary shadow-sm font-label-sm text-label-sm transition-all" onclick="setTimeWindow(this, '30D')">30D</button>
<button class="px-space-md py-1 rounded-full text-on-surface-variant font-label-sm text-label-sm hover:text-on-surface transition-all" onclick="setTimeWindow(this, '90D')">90D</button>
<button class="px-space-md py-1 rounded-full text-on-surface-variant font-label-sm text-label-sm hover:text-on-surface transition-all" onclick="setTimeWindow(this, '12M')">12M</button>
</div>
<!-- Comparison Toggle -->
<button class="flex items-center gap-space-xs px-space-md py-2 rounded-full bg-surface-container-low hover:bg-surface-container transition-all shadow-sm group" id="toggle-comparison">
<span class="w-4 h-4 rounded-full bg-primary/20 flex items-center justify-center text-primary group-[.active]:bg-primary group-[.active]:text-on-primary">
<span class="material-symbols-outlined text-xs">check</span>
</span>
<span class="font-label-sm text-label-sm text-on-surface-variant group-[.active]:text-on-surface font-semibold">vs Previous Period</span>
</button>
<!-- Download Report CTA -->
<button class="flex items-center gap-space-xs px-space-lg py-2.5 rounded-full bg-primary hover:bg-primary-container text-on-primary shadow-md transition-all active:scale-[0.98]">
<span class="material-symbols-outlined text-base">file_download</span>
<span class="font-label-md text-label-md font-semibold">Download Analytics Report</span>
</button>
</div>
</div>
<!-- 4 High-Impact Telemetry Metric Cards -->
<div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-space-md">
<!-- Total Platform Clock-Ins -->
<div class="p-space-lg rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col justify-between relative overflow-hidden group hover:shadow-md transition-shadow">
<div class="absolute -right-4 -bottom-4 w-24 h-24 bg-primary/5 rounded-full blur-xl pointer-events-none"></div>
<div class="flex items-center justify-between">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Total Clock-Ins</span>
<span class="material-symbols-outlined text-primary text-xl p-2 rounded-full bg-surface-container-low">touch_app</span>
</div>
<div class="my-space-sm">
<div class="font-display-time-lg text-display-time-lg text-on-surface font-bold tracking-tight">1,482,910</div>
<div class="font-body-sm text-body-sm text-on-surface-variant">punches this month</div>
</div>
<div class="flex items-center gap-space-xs font-label-sm text-label-sm text-tertiary">
<span class="material-symbols-outlined text-sm">trending_up</span>
<span class="font-semibold">+18.2%</span>
<span class="text-on-surface-variant">vs last billing cycle</span>
</div>
</div>
<!-- Daily Active Mobile Users -->
<div class="p-space-lg rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col justify-between relative overflow-hidden group hover:shadow-md transition-shadow">
<div class="absolute -right-4 -bottom-4 w-24 h-24 bg-secondary-fixed/30 rounded-full blur-xl pointer-events-none"></div>
<div class="flex items-center justify-between">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Mobile DAU</span>
<span class="material-symbols-outlined text-secondary text-xl p-2 rounded-full bg-surface-container-low">smartphone</span>
</div>
<div class="my-space-sm">
<div class="font-display-time-lg text-display-time-lg text-on-surface font-bold tracking-tight">24,850</div>
<div class="font-body-sm text-body-sm text-on-surface-variant">active employees today</div>
</div>
<div class="flex items-center gap-space-xs font-label-sm text-label-sm text-tertiary">
<span class="material-symbols-outlined text-sm">trending_up</span>
<span class="font-semibold">+4.6%</span>
<span class="text-on-surface-variant">peak shift concurrency</span>
</div>
</div>
<!-- Verification Pass Rate -->
<div class="p-space-lg rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col justify-between relative overflow-hidden group hover:shadow-md transition-shadow">
<div class="absolute -right-4 -bottom-4 w-24 h-24 bg-tertiary-fixed-dim/20 rounded-full blur-xl pointer-events-none"></div>
<div class="flex items-center justify-between">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Verification Rate</span>
<span class="material-symbols-outlined text-tertiary text-xl p-2 rounded-full bg-surface-container-low">verified</span>
</div>
<div class="my-space-sm">
<div class="font-display-time-lg text-display-time-lg text-tertiary font-bold tracking-tight">99.1%</div>
<div class="font-body-sm text-body-sm text-on-surface-variant">Biometric 3D + GPS Geofenced</div>
</div>
<div class="flex items-center gap-space-xs font-label-sm text-label-sm text-on-surface-variant">
<span class="w-2 h-2 rounded-full bg-tertiary"></span>
<span>0.09% spoofing rejection rate</span>
</div>
</div>
<!-- Tenant Churn Rate -->
<div class="p-space-lg rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col justify-between relative overflow-hidden group hover:shadow-md transition-shadow">
<div class="absolute -right-4 -bottom-4 w-24 h-24 bg-primary-fixed/40 rounded-full blur-xl pointer-events-none"></div>
<div class="flex items-center justify-between">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Tenant Churn</span>
<span class="material-symbols-outlined text-primary text-xl p-2 rounded-full bg-surface-container-low">autorenew</span>
</div>
<div class="my-space-sm">
<div class="font-display-time-lg text-display-time-lg text-on-surface font-bold tracking-tight">0.8%</div>
<div class="font-body-sm text-body-sm text-on-surface-variant">Trailing 90-day churn rate</div>
</div>
<div class="flex items-center gap-space-xs font-label-sm text-label-sm text-tertiary">
<span class="material-symbols-outlined text-sm">stars</span>
<span class="font-bold">114% Net Revenue Retention (NRR)</span>
</div>
</div>
</div>
<!-- Charts & Visual Growth Analytics Bento -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-space-md">
<!-- Punch Activity Curve across 24h Cycle -->
<div class="lg:col-span-7 p-space-lg rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col justify-between">
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-space-sm mb-space-md">
<div>
<div class="flex items-center gap-space-xs">
<h2 class="font-headline-sm text-headline-sm font-bold text-on-surface">24-Hour Punch Volume Load</h2>
<span class="px-2 py-0.5 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm">UTC+8 Manila</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant">Hourly telemetry across nationwide client shifts</p>
</div>
<div class="flex items-center gap-space-md font-label-sm text-label-sm">
<span class="flex items-center gap-1.5"><span class="w-3 h-3 rounded-full bg-primary"></span> Clock-Ins</span>
<span class="flex items-center gap-1.5"><span class="w-3 h-3 rounded-full bg-secondary"></span> Clock-Outs</span>
</div>
</div>
<!-- SVG 24H Curve Chart -->
<div class="relative w-full h-64 flex flex-col justify-end">
<div class="absolute inset-0 flex flex-col justify-between pointer-events-none opacity-20">
<div class="border-b border-outline-variant w-full h-0"></div>
<div class="border-b border-outline-variant w-full h-0"></div>
<div class="border-b border-outline-variant w-full h-0"></div>
<div class="border-b border-outline-variant w-full h-0"></div>
</div>
<!-- Morning Peak Badge Overlay -->
<div class="absolute left-[30%] top-6 px-space-sm py-1 rounded-lg bg-surface-container-high shadow-md flex items-center gap-space-xs z-10">
<span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
<span class="font-label-sm text-label-sm font-bold text-on-surface">Peak: 07:45 AM (312k/hr)</span>
</div>
<!-- Shift Handover Evening Badge Overlay -->
<div class="absolute right-[24%] top-14 px-space-sm py-1 rounded-lg bg-surface-container-high shadow-md flex items-center gap-space-xs z-10">
<span class="w-2 h-2 rounded-full bg-secondary"></span>
<span class="font-label-sm text-label-sm font-semibold text-on-surface">BPO Night Shift Swap (18:30)</span>
</div>
<svg class="w-full h-52 overflow-visible" preserveaspectratio="none" viewbox="0 0 700 200">
<defs>
<lineargradient id="clockInGrad" x1="0" x2="0" y1="0" y2="1">
<stop offset="0%" stop-color="#a63143" stop-opacity="0.35"></stop>
<stop offset="100%" stop-color="#a63143" stop-opacity="0.0"></stop>
</lineargradient>
<lineargradient id="clockOutGrad" x1="0" x2="0" y1="0" y2="1">
<stop offset="0%" stop-color="#894d52" stop-opacity="0.25"></stop>
<stop offset="100%" stop-color="#894d52" stop-opacity="0.0"></stop>
</lineargradient>
</defs>
<!-- Clock-Out Area -->
<path d="M 0 180 Q 80 185 140 170 T 260 140 T 380 160 T 490 50 T 580 40 T 700 130 L 700 200 L 0 200 Z" fill="url(#clockOutGrad)"></path>
<path d="M 0 180 Q 80 185 140 170 T 260 140 T 380 160 T 490 50 T 580 40 T 700 130" fill="none" stroke="#894d52" stroke-dasharray="4 2" stroke-width="2.5"></path>
<!-- Clock-In Area & Peak Highlight -->
<path d="M 0 190 Q 60 180 120 150 T 210 20 T 300 80 T 420 150 T 520 130 T 630 110 T 700 185 L 700 200 L 0 200 Z" fill="url(#clockInGrad)"></path>
<path d="M 0 190 Q 60 180 120 150 T 210 20 T 300 80 T 420 150 T 520 130 T 630 110 T 700 185" fill="none" stroke="#a63143" stroke-width="3.5"></path>
<!-- Peak Marker Dot -->
<circle class="animate-ping" cx="210" cy="20" fill="#a63143" r="5" style="animation-duration: 2s;"></circle>
<circle cx="210" cy="20" fill="#ffffff" r="5" stroke="#a63143" stroke-width="3"></circle>
</svg>
<!-- Timeline X-Axis Labels -->
<div class="flex justify-between items-center pt-space-xs text-on-surface-variant font-mono-metric text-body-sm">
<span>00:00</span>
<span>04:00</span>
<span class="text-primary font-bold">08:00</span>
<span>12:00</span>
<span>16:00</span>
<span class="text-secondary font-bold">20:00</span>
<span>23:59</span>
</div>
</div>
<div class="flex items-center justify-between pt-space-md mt-space-md border-t border-outline-variant/30 text-on-surface-variant font-body-sm text-body-sm">
<div class="flex items-center gap-space-xs">
<span class="material-symbols-outlined text-sm text-tertiary">bolt</span>
<span>Edge Ingestion latency: <strong class="text-on-surface">34ms average</strong> across AWS AP-Southeast-1</span>
</div>
<span class="font-mono-metric">Zero Queuing Backlog</span>
</div>
</div>
<!-- Monthly Tenant Cohort & Tier Expansion -->
<div class="lg:col-span-5 p-space-lg rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col justify-between">
<div class="flex items-center justify-between mb-space-sm">
<div>
<h2 class="font-headline-sm text-headline-sm font-bold text-on-surface">Tenant Growth &amp; Cohorts</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant">Tier adoption trajectory &amp; net additions</p>
</div>
<div class="text-right">
<div class="font-label-lg text-label-lg font-bold text-tertiary">+34 New Tenants</div>
<span class="font-label-sm text-label-sm text-on-surface-variant">this month</span>
</div>
</div>
<!-- Tier Composition Horizontal Bars -->
<div class="flex flex-col gap-space-md my-auto">
<!-- Enterprise Tier -->
<div class="flex flex-col gap-1">
<div class="flex justify-between items-center font-label-md text-label-md">
<span class="flex items-center gap-space-xs text-on-surface font-semibold">
<span class="w-3 h-3 rounded-sm bg-primary"></span>
                Enterprise (500+ seats)
              </span>
<span class="font-mono-metric font-bold text-on-surface">148 orgs <span class="text-on-surface-variant font-normal">(42%)</span></span>
</div>
<div class="w-full h-3 bg-surface-container rounded-full overflow-hidden">
<div class="h-full bg-primary rounded-full" style="width: 42%;"></div>
</div>
</div>
<!-- Business Tier -->
<div class="flex flex-col gap-1">
<div class="flex justify-between items-center font-label-md text-label-md">
<span class="flex items-center gap-space-xs text-on-surface font-semibold">
<span class="w-3 h-3 rounded-sm bg-secondary"></span>
                Business (50 - 499 seats)
              </span>
<span class="font-mono-metric font-bold text-on-surface">312 orgs <span class="text-on-surface-variant font-normal">(46%)</span></span>
</div>
<div class="w-full h-3 bg-surface-container rounded-full overflow-hidden">
<div class="h-full bg-secondary rounded-full" style="width: 46%;"></div>
</div>
</div>
<!-- Starter Tier -->
<div class="flex flex-col gap-1">
<div class="flex justify-between items-center font-label-md text-label-md">
<span class="flex items-center gap-space-xs text-on-surface font-semibold">
<span class="w-3 h-3 rounded-sm bg-outline"></span>
                Starter Growth (&lt; 50 seats)
              </span>
<span class="font-mono-metric font-bold text-on-surface">88 orgs <span class="text-on-surface-variant font-normal">(12%)</span></span>
</div>
<div class="w-full h-3 bg-surface-container rounded-full overflow-hidden">
<div class="h-full bg-outline rounded-full" style="width: 12%;"></div>
</div>
</div>
</div>
<!-- Retention Metric Banner -->
<div class="p-space-md rounded-xl bg-surface-container-low flex items-center justify-between mt-space-md">
<div class="flex items-center gap-space-sm">
<div class="w-10 h-10 rounded-full bg-surface-container flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-xl">loyalty</span>
</div>
<div>
<div class="font-label-md text-label-md font-bold text-on-surface">Net Retention Rate 114%</div>
<div class="font-body-sm text-body-sm text-on-surface-variant">Seat expansions outpace churn 6.2x</div>
</div>
</div>
<span class="material-symbols-outlined text-tertiary text-2xl">arrow_outward</span>
</div>
</div>
</div>
<!-- Feature Adoption & Reliability Matrix -->
<div class="flex flex-col gap-space-sm">
<div class="flex items-center justify-between">
<div>
<h2 class="font-headline-sm text-headline-sm font-bold text-on-surface">Core Feature Adoption &amp; Engine Reliability</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant">Fidelity metrics across biometric security, geospatial compliance, and offline payroll queues.</p>
</div>
<div class="hidden sm:flex items-center gap-space-xs text-tertiary font-label-sm text-label-sm">
<span class="w-2 h-2 rounded-full bg-tertiary animate-pulse"></span>
          All verification pipelines active
        </div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-space-md">
<!-- Feature 1: Geofence Precision Lock -->
<div class="p-space-md rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col justify-between">
<div class="flex items-center justify-between">
<div class="w-10 h-10 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
<span class="material-symbols-outlined">location_on</span>
</div>
<span class="px-2 py-0.5 rounded-full bg-tertiary/10 text-tertiary font-label-sm text-label-sm font-bold">94.2% Active</span>
</div>
<div class="mt-space-md">
<h3 class="font-headline-sm text-headline-sm text-on-surface font-semibold">Geofence Precision Lock</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Multi-polygon boundary checking with dynamic jitter dampening (+/- 4m accuracy).</p>
</div>
<div class="pt-space-md mt-space-md border-t border-surface-container flex items-center justify-between text-on-surface-variant font-label-sm text-label-sm">
<span>Violations blocked</span>
<span class="font-mono-metric font-bold text-on-surface">1,842 attempts</span>
</div>
</div>
<!-- Feature 2: Biometric 3D Liveness -->
<div class="p-space-md rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col justify-between">
<div class="flex items-center justify-between">
<div class="w-10 h-10 rounded-xl bg-secondary/10 text-secondary flex items-center justify-center">
<span class="material-symbols-outlined">face</span>
</div>
<span class="px-2 py-0.5 rounded-full bg-tertiary/10 text-tertiary font-label-sm text-label-sm font-bold">98.6% Enabled</span>
</div>
<div class="mt-space-md">
<h3 class="font-headline-sm text-headline-sm text-on-surface font-semibold">Biometric 3D Liveness</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Micro-expression analysis preventing buddy-punching &amp; photo playback hacks.</p>
</div>
<div class="pt-space-md mt-space-md border-t border-surface-container flex items-center justify-between text-on-surface-variant font-label-sm text-label-sm">
<span>Avg match speed</span>
<span class="font-mono-metric font-bold text-on-surface">420ms</span>
</div>
</div>
<!-- Feature 3: DTR / Payroll Export -->
<div class="p-space-md rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col justify-between">
<div class="flex items-center justify-between">
<div class="w-10 h-10 rounded-xl bg-surface-container text-on-surface-variant flex items-center justify-center">
<span class="material-symbols-outlined">receipt_long</span>
</div>
<span class="px-2 py-0.5 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm font-bold">1-Click DTR</span>
</div>
<div class="mt-space-md">
<h3 class="font-headline-sm text-headline-sm text-on-surface font-semibold">Payroll Batch Exports</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Automated timesheet compile to CSV, SAP, Sprout, and QuickBooks formats.</p>
</div>
<div class="pt-space-md mt-space-md border-t border-surface-container flex items-center justify-between text-on-surface-variant font-label-sm text-label-sm">
<span>Current pay cycle</span>
<span class="font-mono-metric font-bold text-on-surface">3,420 exports</span>
</div>
</div>
<!-- Feature 4: Offline Punch Queue & Sync -->
<div class="p-space-md rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col justify-between">
<div class="flex items-center justify-between">
<div class="w-10 h-10 rounded-xl bg-tertiary/10 text-tertiary flex items-center justify-center">
<span class="material-symbols-outlined">cloud_sync</span>
</div>
<span class="px-2 py-0.5 rounded-full bg-tertiary/10 text-tertiary font-label-sm text-label-sm font-bold">100% Synced</span>
</div>
<div class="mt-space-md">
<h3 class="font-headline-sm text-headline-sm text-on-surface font-semibold">Offline Queue Engine</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Encrypted local SQLite storage that auto-syncs upon cellar network restoration.</p>
</div>
<div class="pt-space-md mt-space-md border-t border-surface-container flex items-center justify-between text-on-surface-variant font-label-sm text-label-sm">
<span>Offline reconciled</span>
<span class="font-mono-metric font-bold text-on-surface">12,400 punches</span>
</div>
</div>
</div>
</div>
<!-- Geographic Distribution & Hub Density -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-space-md items-start">
<!-- Regional Table Breakdown -->
<div class="lg:col-span-8 p-space-lg rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col">
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-space-xs mb-space-md">
<div>
<h2 class="font-headline-sm text-headline-sm font-bold text-on-surface">Workforce Distribution by Region</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant">Live telemetry and shift activity throughout major business hubs in the Philippines</p>
</div>
<div class="flex items-center gap-space-xs font-label-sm text-label-sm text-on-surface-variant">
<span class="material-symbols-outlined text-base">public</span>
            5 Regions Tracked
          </div>
</div>
<div class="overflow-x-auto w-full">
<table class="w-full text-left">
<thead>
<tr class="text-on-surface-variant font-label-sm text-label-sm border-b border-surface-container">
<th class="pb-space-sm font-semibold">REGION / HUB</th>
<th class="pb-space-sm font-semibold">SHARE</th>
<th class="pb-space-sm font-semibold">ACTIVE PUNCHES (30D)</th>
<th class="pb-space-sm font-semibold">TENANT SITES</th>
<th class="pb-space-sm font-semibold text-right">SYNC HEALTH</th>
</tr>
</thead>
<tbody class="divide-y divide-surface-container font-body-sm text-body-sm">
<!-- NCR -->
<tr class="hover:bg-surface-container-low transition-colors">
<td class="py-space-md">
<div class="flex items-center gap-space-sm">
<span class="w-2.5 h-2.5 rounded-full bg-primary"></span>
<div>
<div class="font-label-md text-label-md font-bold text-on-surface">National Capital Region (NCR)</div>
<div class="text-on-surface-variant font-body-sm">Metro Manila, BGC, Makati, Ortigas</div>
</div>
</div>
</td>
<td class="py-space-md">
<div class="flex items-center gap-space-sm">
<span class="font-mono-metric font-bold text-on-surface">58%</span>
<div class="w-16 h-2 bg-surface-container rounded-full overflow-hidden">
<div class="h-full bg-primary rounded-full" style="width: 58%;"></div>
</div>
</div>
</td>
<td class="py-space-md font-mono-metric text-on-surface">860,087</td>
<td class="py-space-md font-mono-metric text-on-surface">612 sites</td>
<td class="py-space-md text-right">
<span class="inline-flex items-center gap-1 text-tertiary font-label-sm text-label-sm font-semibold">
<span class="material-symbols-outlined text-sm">check_circle</span> 99.98%
                  </span>
</td>
</tr>
<!-- Metro Cebu -->
<tr class="hover:bg-surface-container-low transition-colors">
<td class="py-space-md">
<div class="flex items-center gap-space-sm">
<span class="w-2.5 h-2.5 rounded-full bg-secondary"></span>
<div>
<div class="font-label-md text-label-md font-bold text-on-surface">Metro Cebu (Central Visayas)</div>
<div class="text-on-surface-variant font-body-sm">Cebu IT Park, Mandaue, Lapu-Lapu</div>
</div>
</div>
</td>
<td class="py-space-md">
<div class="flex items-center gap-space-sm">
<span class="font-mono-metric font-bold text-on-surface">18%</span>
<div class="w-16 h-2 bg-surface-container rounded-full overflow-hidden">
<div class="h-full bg-secondary rounded-full" style="width: 18%;"></div>
</div>
</div>
</td>
<td class="py-space-md font-mono-metric text-on-surface">266,923</td>
<td class="py-space-md font-mono-metric text-on-surface">240 sites</td>
<td class="py-space-md text-right">
<span class="inline-flex items-center gap-1 text-tertiary font-label-sm text-label-sm font-semibold">
<span class="material-symbols-outlined text-sm">check_circle</span> 99.94%
                  </span>
</td>
</tr>
<!-- Metro Davao -->
<tr class="hover:bg-surface-container-low transition-colors">
<td class="py-space-md">
<div class="flex items-center gap-space-sm">
<span class="w-2.5 h-2.5 rounded-full bg-tertiary"></span>
<div>
<div class="font-label-md text-label-md font-bold text-on-surface">Metro Davao (Davao Region)</div>
<div class="text-on-surface-variant font-body-sm">Davao City Tech Corridor, Lanang</div>
</div>
</div>
</td>
<td class="py-space-md">
<div class="flex items-center gap-space-sm">
<span class="font-mono-metric font-bold text-on-surface">12%</span>
<div class="w-16 h-2 bg-surface-container rounded-full overflow-hidden">
<div class="h-full bg-tertiary rounded-full" style="width: 12%;"></div>
</div>
</div>
</td>
<td class="py-space-md font-mono-metric text-on-surface">177,949</td>
<td class="py-space-md font-mono-metric text-on-surface">184 sites</td>
<td class="py-space-md text-right">
<span class="inline-flex items-center gap-1 text-tertiary font-label-sm text-label-sm font-semibold">
<span class="material-symbols-outlined text-sm">check_circle</span> 99.91%
                  </span>
</td>
</tr>
<!-- Calabarzon -->
<tr class="hover:bg-surface-container-low transition-colors">
<td class="py-space-md">
<div class="flex items-center gap-space-sm">
<span class="w-2.5 h-2.5 rounded-full bg-outline"></span>
<div>
<div class="font-label-md text-label-md font-bold text-on-surface">Region IV-A (CALABARZON)</div>
<div class="text-on-surface-variant font-body-sm">Laguna Technopark, Batangas Logistics</div>
</div>
</div>
</td>
<td class="py-space-md">
<div class="flex items-center gap-space-sm">
<span class="font-mono-metric font-bold text-on-surface">8%</span>
<div class="w-16 h-2 bg-surface-container rounded-full overflow-hidden">
<div class="h-full bg-outline rounded-full" style="width: 8%;"></div>
</div>
</div>
</td>
<td class="py-space-md font-mono-metric text-on-surface">118,632</td>
<td class="py-space-md font-mono-metric text-on-surface">152 sites</td>
<td class="py-space-md text-right">
<span class="inline-flex items-center gap-1 text-tertiary font-label-sm text-label-sm font-semibold">
<span class="material-symbols-outlined text-sm">check_circle</span> 99.89%
                  </span>
</td>
</tr>
<!-- North Luzon -->
<tr class="hover:bg-surface-container-low transition-colors">
<td class="py-space-md">
<div class="flex items-center gap-space-sm">
<span class="w-2.5 h-2.5 rounded-full bg-outline-variant"></span>
<div>
<div class="font-label-md text-label-md font-bold text-on-surface">North Luzon Hubs</div>
<div class="text-on-surface-variant font-body-sm">Clark Freeport Zone, Baguio City BPO</div>
</div>
</div>
</td>
<td class="py-space-md">
<div class="flex items-center gap-space-sm">
<span class="font-mono-metric font-bold text-on-surface">4%</span>
<div class="w-16 h-2 bg-surface-container rounded-full overflow-hidden">
<div class="h-full bg-outline-variant rounded-full" style="width: 4%;"></div>
</div>
</div>
</td>
<td class="py-space-md font-mono-metric text-on-surface">59,316</td>
<td class="py-space-md font-mono-metric text-on-surface">78 sites</td>
<td class="py-space-md text-right">
<span class="inline-flex items-center gap-1 text-tertiary font-label-sm text-label-sm font-semibold">
<span class="material-symbols-outlined text-sm">check_circle</span> 99.95%
                  </span>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<!-- Regional Radar Visual & Satellite Nodes -->
<div class="lg:col-span-4 p-space-lg rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col justify-between">
<div>
<div class="flex items-center justify-between mb-space-sm">
<h3 class="font-headline-sm text-headline-sm font-bold text-on-surface">Hub Radar Density</h3>
<span class="material-symbols-outlined text-primary text-xl">satellite_alt</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant">Active tenant GPS centroid mapped against regional telemetry towers.</p>
</div>
<!-- Interactive Map Visual Container -->
<div class="relative w-full h-56 my-space-md rounded-xl overflow-hidden bg-surface-container flex items-center justify-center">
<div class="w-full h-full bg-cover bg-center" data-location="Manila, Philippines" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAjrbE8BnbPGauHuVMD_aEicxxTZ0vbshXIYw_4duwBmv05LcSV9E7auffVqqrMlCeE5C0gO-bY4dlikfPbizv4fykuVn8hcQNWnXOuiTFzmihOAG2AYcE83QCmkHezzP7HmNw36Am85U6g2AbGosnULn78pv74gr5cWaySfTQQOLz-OmpJsJlOJqjLwiXjATgeULI7R7dRnqAJfNPLDC4sxq8-u78ck1-IDdqlaWU-NyClhBdC2tj1tw')"></div>
<!-- Concentric Geofence Pulse Overlay -->
<div class="absolute inset-0 bg-surface-container/20 backdrop-blur-[1px] flex items-center justify-center pointer-events-none">
<div class="w-40 h-40 rounded-full border-2 border-primary/30 flex items-center justify-center animate-ping" style="animation-duration: 4s;"></div>
<div class="w-24 h-24 rounded-full border border-primary/50 flex items-center justify-center absolute"></div>
<div class="w-3.5 h-3.5 rounded-full bg-primary ring-4 ring-primary/20 absolute"></div>
</div>
<div class="absolute bottom-2 left-2 right-2 px-space-sm py-1.5 rounded-lg bg-surface-container-lowest/90 backdrop-blur-md shadow-sm flex items-center justify-between">
<span class="font-label-sm text-label-sm text-on-surface font-semibold flex items-center gap-1">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span> NCR Multi-Polygon Sync
            </span>
<span class="font-mono-metric text-label-sm text-primary font-bold">14.5995° N, 120.9842° E</span>
</div>
</div>
<!-- Operational Status Checklist -->
<div class="flex flex-col gap-space-xs font-body-sm text-body-sm text-on-surface-variant">
<div class="flex items-center justify-between">
<span>Primary NTP Time Master:</span>
<span class="font-mono-metric text-on-surface font-semibold">ph.pool.ntp.org (0.4ms)</span>
</div>
<div class="flex items-center justify-between">
<span>Cellular Carrier Fallback:</span>
<span class="font-mono-metric text-tertiary font-semibold">Globe / Smart Redundant</span>
</div>
<div class="flex items-center justify-between">
<span>Tenant API Quota Health:</span>
<span class="font-mono-metric text-on-surface font-semibold">99.98% Headroom</span>
</div>
</div>
<button class="w-full mt-space-md py-2.5 rounded-full bg-surface-container hover:bg-surface-container-high text-on-surface font-label-md text-label-md font-semibold transition-colors flex items-center justify-center gap-space-xs">
<span class="material-symbols-outlined text-base">hub</span>
          Inspect Edge Router Nodes
        </button>
</div>
</div>
</div>
</div>
<script>
  function setTimeWindow(btn, windowLabel) {
    const parent = btn.parentElement;
    const buttons = parent.querySelectorAll('button');
    buttons.forEach(b => {
      b.className = 'px-space-md py-1 rounded-full text-on-surface-variant font-label-sm text-label-sm hover:text-on-surface transition-all';
    });
    btn.className = 'px-space-md py-1 rounded-full bg-surface-container-lowest text-primary shadow-sm font-label-sm text-label-sm transition-all';
  }

  const compToggle = document.getElementById('toggle-comparison');
  if (compToggle) {
    compToggle.addEventListener('click', function() {
      this.classList.toggle('active');
    });
  }
</script></main>
</div>
<script>
  document.querySelectorAll('[data-path]').forEach(function (item) {
    if (item.dataset.path === 'dashboard-overview') item.href = "{{ route('super.admin') }}";
    if (item.dataset.path === 'subscription-billing') item.href = "{{ route('super.admin.billing') }}";
    if (item.dataset.path === 'dashboard') item.href = "{{ route('super.admin') }}";
    if (item.dataset.path === 'businesses') item.href = "{{ route('super.admin.businesses') }}";
    if (item.dataset.path === 'subscriptions-billing') item.href = "{{ route('super.admin.billing') }}";
    if (item.dataset.path === 'plans-pricing') item.href = "{{ route('super.admin.plans') }}";
    if (item.dataset.path === 'platform-analytics') item.href = "{{ route('super.admin.analytics') }}";
    if (item.dataset.path === 'customer-activity') item.href = "{{ route('super.admin.activity') }}";
    if (item.dataset.path === 'support-tickets') item.href = "{{ route('super.admin.tickets') }}";
    if (item.dataset.path === 'platform-health') item.href = "{{ route('super.admin.health') }}";
    if (item.dataset.path === 'system-settings') item.href = "{{ route('super.admin.settings') }}";
  });
</script>
<script src="{{ asset('js/super-admin-navigation.js') }}"></script>
</body></html>
