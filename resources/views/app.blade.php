<!---
Site: Sham Vision
Created At: 01-01-2026
Developed By: Hadi Hilal
--->
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{app()->getLocale() == 'ar' ? 'rtl' :'ltr'}}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="index, follow"/>

    @php
        $seo = \Modules\Base\Models\Seo::pluck('value', 'key');
        $settings = \Modules\Base\Models\Settings::pluck('value', 'key');
        $appLogoUrl = asset('images/logo.png');
    @endphp
    <meta name="author" content="{{ $seo->get('website_name') }}">
    <meta name="theme-color" content="#2189ca"/>

    <title inertia>{{ $page['props']['meta']['title'] ?? $seo->get('website_name') }}</title>
    <meta name="description" content="{{ $page['props']['meta']['description'] ?? $seo->get('website_desc') }}">
    <meta name="keywords" content="{{ $page['props']['meta']['keywords'] ?? $seo->get('website_keywords') }}">

    <link rel="canonical" href="{{ $page['props']['meta']['canonical'] ?? url()->current() }}">

    <meta property="og:title" content="{{ $page['props']['meta']['og']['title'] ?? $seo->get('website_name') }}">
    <meta property="og:description"
          content="{{ $page['props']['meta']['og']['description'] ?? $seo->get('website_desc') }}">
    <meta property="og:image"
          content="{{ asset('storage/' . ($page['props']['meta']['og']['image'] ?? $settings->get('meta_img'))) }}">

    <meta name="twitter:title" content="{{ $page['props']['meta']['twitter']['title'] ?? $seo->get('website_name') }}">
    <meta name="twitter:description"
          content="{{ $page['props']['meta']['twitter']['description'] ?? $seo->get('website_desc') }}">
    <meta name="twitter:image"
          content="{{ asset('storage/' . ($page['props']['meta']['twitter']['image'] ?? $settings->get('meta_img'))) }}">

    <link rel="alternate" hreflang="en" href="{{ url('en') }}"/>
    <link rel="alternate" hreflang="ar" href="{{ url('ar') }}"/>
    <link rel="alternate" hreflang="x-default" href="{{ url('/') }}"/>

    <link rel="icon" type="image/png" href="{{ asset('images/favicon/favicon-96x96.png') }}" sizes="96x96"/>
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/favicon/favicon.svg') }}"/>
    <link rel="shortcut icon" href="{{ asset('images/favicon/favicon.ico') }}"/>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-touch-icon.png') }}"/>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
          rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
          rel="stylesheet">

    @routes
    @inertiaHead

    <link rel="stylesheet" href="{{ asset('site/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('site/css/animate.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('site/css/custom-animate.css') }}"/>
    <link rel="stylesheet" href="{{ asset('site/css/font-awesome-all.css') }}"/>
    {{--    <link rel="stylesheet" href="{{ asset('site/css/odometer.min.css') }}"/>--}}
    <link rel="stylesheet" href="{{ asset('site/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/owl.carousel.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('site/css/owl.theme.default.min.css') }}"/>

    <link rel="stylesheet" href="{{ asset('site/css/module-css/banner.css') }}"/>
    <link rel="stylesheet" href="{{ asset('site/css/module-css/slider.css') }}"/>
    <link rel="stylesheet" href="{{ asset('site/css/module-css/footer.css') }}"/>
    <link rel="stylesheet" href="{{ asset('site/css/module-css/services.css') }}"/>
    <link rel="stylesheet" href="{{ asset('site/css/module-css/sliding-text.css') }}"/>
    <link rel="stylesheet" href="{{ asset('site/css/module-css/about.css') }}"/>
    {{--    <link rel="stylesheet" href="{{ asset('site/css/module-css/counter.css') }}"/>--}}
    <link rel="stylesheet" href="{{ asset('site/css/module-css/portfolio.css') }}"/>
    <link rel="stylesheet" href="{{ asset('site/css/module-css/process.css') }}"/>
    <link rel="stylesheet" href="{{ asset('site/css/module-css/contact.css') }}"/>
    <link rel="stylesheet" href="{{ asset('site/css/module-css/testimonial.css') }}"/>
    <link rel="stylesheet" href="{{ asset('site/css/module-css/brand.css') }}"/>
    <link rel="stylesheet" href="{{ asset('site/css/module-css/newsletter.css') }}"/>
    <link rel="stylesheet" href="{{ asset('site/css/module-css/team.css') }}"/>
    {{--    <link rel="stylesheet" href="{{ asset('site/css/module-css/pricing.css') }}"/>--}}
    <link rel="stylesheet" href="{{ asset('site/css/module-css/event.css') }}"/>
    <link rel="stylesheet" href="{{ asset('site/css/module-css/blog.css') }}"/>
    <link rel="stylesheet" href="{{ asset('site/css/module-css/why-choose.css') }}"/>
    <link rel="stylesheet" href="{{ asset('site/css/module-css/feature.css') }}"/>
    {{--    <link rel="stylesheet" href="{{ asset('site/css/module-css/faq.css') }}"/>--}}
    <link rel="stylesheet" href="{{ asset('site/css/module-css/cta.css') }}"/>


    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('site/css/style.css') }}">


    <style>

    </style>


    @if(app()->getLocale() === "ar")

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('site/css/rtl.css')}}">
    @endif
    <link rel="stylesheet" href="{{ asset('site/css/responsive.css') }}"/>
    {!! $settings->get('header_scripts') !!}
</head>
<body class="custom-cursor">

<div class="custom-cursor__cursor"></div>
<div class="custom-cursor__cursor-two"></div>

<!--Start Preloader-->
<div class="loader js-preloader">
    <div></div>
    <div></div>
    <div></div>
</div>
<!--End Preloader-->


@inertia
<div id="symfonixbot-launcher-wrap" aria-label="Symfonix Bot launcher">
    <div id="symfonixbot-launcher" aria-label="{{ __('chat.launcher.open') }}">
        <img src="{{ asset('images/robot.png') }}" alt="{{ __('chat.launcher.title') }}">
    </div>
    <div id="symfonixbot-launcher-hint" class="fade-in">{{ __('chat.launcher.ask_me') }}</div>
</div>
<div id="symfonixbot-container" class="symfonixbot-hidden" aria-label="{{ __('chat.launcher.title') }}">
    <div class="symfonixbot-header">
        <div class="symfonixbot-header-title">{{ __('chat.launcher.title') }}</div>
        <div class="symfonixbot-header-close" id="symfonixbot-close">×</div>
    </div>
    <div id="symfonixbot-messages" class="symfonixbot-messages"></div>
    <div class="symfonixbot-input-row">
        <input id="symfonixbot-input" type="text" placeholder="{{ __('chat.launcher.placeholder') }}">
        <button id="symfonixbot-send">➤</button>
    </div>
</div>
<a href="#" data-target="html" class="scroll-to-target scroll-to-top d-none d-lg-flex">
    <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
    <span class="scroll-to-top__text"> {{__('Go Back Top')}}</span>
</a>


<script src="{{ asset('site/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('site/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('site/js/jquery.appear.min.js') }}"></script>
<script src="{{ asset('site/js/wow.js') }}"></script>
<script src="{{ asset('site/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('site/js/marquee.min.js') }}"></script>

<script src="{{ asset('site/js/gsap/gsap.js') }}"></script>
<script src="{{ asset('site/js/gsap/ScrollTrigger.js') }}"></script>
<script src="{{ asset('site/js/gsap/SplitText.js') }}"></script>


<!-- template js -->
<script src="{{ asset('site/js/script.js') }}"></script>
<script>
    (function () {
        const endpoint = '{{ route('botman.handle') }}?locale={{ app()->getLocale() }}';
        const symfonixbotSessionId = 'user-' + Math.random().toString(36).substring(2) + Date.now().toString(36);
        const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '';

        const launcher = document.getElementById('symfonixbot-launcher');
        const container = document.getElementById('symfonixbot-container');
        const closeBtn = document.getElementById('symfonixbot-close');
        const messagesEl = document.getElementById('symfonixbot-messages');
        const inputEl = document.getElementById('symfonixbot-input');
        const sendBtn = document.getElementById('symfonixbot-send');
        const hintEl = document.getElementById('symfonixbot-launcher-hint');

        function toggleChat(open) {
            const shouldOpen = open !== undefined ? open : container.classList.contains('symfonixbot-hidden');
            container.classList.toggle('symfonixbot-hidden', !shouldOpen);
            if (shouldOpen && hintEl) {
                hintEl.classList.add('symfonixbot-hidden');
            }
            if (shouldOpen) {
                inputEl.focus();
            }
        }

        function appendMessage(from, html) {
            const wrap = document.createElement('div');
            wrap.className = 'symfonixbot-message ' + (from === 'user' ? 'symfonixbot-message-user' : '');
            const bubble = document.createElement('div');
            bubble.className = 'symfonixbot-bubble ' + (from === 'user' ? 'symfonixbot-bubble-user' : 'symfonixbot-bubble-bot');
            bubble.innerHTML = html;
            wrap.appendChild(bubble);
            messagesEl.appendChild(wrap);
            messagesEl.scrollTop = messagesEl.scrollHeight;
        }

        function appendActions(actions) {
            if (!actions || !actions.length) return;
            const row = document.createElement('div');
            row.className = 'symfonixbot-actions';
            actions.forEach(action => {
                const btn = document.createElement('button');
                btn.className = 'symfonixbot-action-btn';
                btn.textContent = action.text || action.name || '';
                btn.addEventListener('click', function () {
                    sendMessage(action.text || '', {interactive: true, value: action.value});
                });
                row.appendChild(btn);
            });
            messagesEl.appendChild(row);
            messagesEl.scrollTop = messagesEl.scrollHeight;
        }

        async function sendMessage(text, options = {}) {
            const trimmed = text.trim();
            if (!trimmed) return;

            appendMessage('user', trimmed);
            inputEl.value = '';

            const payload = {
                driver: 'web',
                userId: symfonixbotSessionId,
                message: trimmed,
                _token: csrfToken,
            };

            if (options.interactive) {
                payload.interactive = true;
                if (options.value) {
                    payload.value = options.value;
                }
            }

            try {
                const res = await fetch(endpoint, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8',
                        'X-CSRF-TOKEN': csrfToken,
                    },
                    credentials: 'same-origin',
                    body: new URLSearchParams(payload),
                });

                const raw = await res.text();
                let data;
                try {
                    data = JSON.parse(raw);
                } catch (e) {
                    const linkIdx = raw.indexOf('<link');
                    const scriptIdx = raw.indexOf('<script');
                    let cutIdx = -1;
                    if (linkIdx > 0 && scriptIdx > 0) {
                        cutIdx = Math.min(linkIdx, scriptIdx);
                    } else if (linkIdx > 0) {
                        cutIdx = linkIdx;
                    } else if (scriptIdx > 0) {
                        cutIdx = scriptIdx;
                    }

                    if (cutIdx > 0) {
                        const jsonPart = raw.substring(0, cutIdx);
                        data = JSON.parse(jsonPart);
                    } else {
                        console.error('Symfonix Bot raw response (no JSON)', raw);
                        return;
                    }
                }

                const replies = (data && data.messages) || [];

                replies.forEach(msg => {
                    if (!msg || typeof msg !== 'object') return;
                    if (msg.type === 'typing_indicator') {
                        return;
                    }
                    if (msg.type === 'actions') {
                        if (msg.text) {
                            appendMessage('bot', msg.text);
                        }
                        appendActions(msg.actions || []);
                    } else {
                        if (msg.text) {
                            appendMessage('bot', msg.text);
                        }
                    }
                });
            } catch (e) {
                console.error('Symfonix Bot error', e);
            }
        }

        launcher.addEventListener('click', function () {
            toggleChat(true);
        });
        closeBtn.addEventListener('click', function () {
            toggleChat(false);
        });
        sendBtn.addEventListener('click', function () {
            sendMessage(inputEl.value);
        });
        inputEl.addEventListener('keydown', function (e) {
            if (e.key === 'Enter' && !e.shiftKey) {
                e.preventDefault();
                sendMessage(inputEl.value);
            }
        });
    })();
</script>
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "{{env('APP_NAME')}}",
      "url": "{{env('APP_URL')}}",
      "logo": "{{ storage_path('storage' . $settings->get('site_logo')) }}"
    }
</script>
<script>
    @if (session('success'))
    toastr.success('{{ session('success') }}');
    @elseif (session('error'))
    toastr.error('{{ session('error') }}');
    @elseif(session('status'))
    toastr.info('{{ session('status') }}');
    @endif
    @if ($errors->any())
    @foreach ($errors->all() as $error)
    toastr.error('{{ $error }}');
    @endforeach
    @endif
</script>

{!! $settings->get('body_scripts') !!}
</body>
</html>
