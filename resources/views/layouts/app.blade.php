<!DOCTYPE html>
<html class="overflow-y-scroll h-full" lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Codellabo') }}</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600" rel="stylesheet">

        <style media="screen">
            .font-sans {
                font-family: 'Source Sans Pro', apple-system, BlinkMacSystemFont, 'Helvetica Neue', arial, sans-serif;
            }
        </style>
    </head>
    <body class="font-sans text-black h-full">
        <header class="absolute pin-t pin-l w-full py-4">
            <div class="flex items-center justify-between px-8">
                <span class="text-2xl tracking-tight font-semibold">
                    AppLogo
                </span>
                <div class="">
                    <div class="flex items-center">
                        <a class="text-lg leading-normal text-blue hover:text-blue-dark no-underline ml-8" href="#">Link</a>
                        <a class="text-lg leading-normal text-blue hover:text-blue-dark no-underline ml-8" href="#">Link</a>
                        <a class="text-lg leading-normal text-blue hover:text-blue-dark no-underline ml-8" href="#">Link</a>
                    </div>
                </div>
            </div>
        </header>
        <section class="bg-blue-lightest h-full py-8">
            <div class="w-5/6 max-w-lg ml-auto mr-auto h-full">
                <div class="flex items-center justify-center text-center h-full">
                    <div>
                        <h1 class="text-4xl sm:text-5xl font-semibold leading-none tracking-tight mb-4">This is an insanely big ass heading</h1>
                        <h2 class="text-2xl sm:text-3xl text-blue-darker opacity-75 font-normal leading-tight mb-8">This is a little ass heading to provide additional support.</h2>
                        <div class="flex flex-col sm:flex-row items-center justify-center sm:pt-3 mb-3 sm:mb-6">
                            <a class="flex items-center text-xl leading-none text-blue hover:text-blue-dark no-underline mb-2 sm:mb-0 sm:mr-4" href="#">
                                <div class="mr-3">
                                    <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="5" r="3"/><line x1="12" y1="22" x2="12" y2="8"/><path d="M5 12H2a10 10 0 0 0 20 0h-3"/></svg>
                                </div>
                                <span>
                                    Link to something
                                </span>
                            </a>
                            <a class="flex items-center text-xl leading-none text-blue hover:text-blue-dark no-underline mt-2 sm:mt-0 sm:ml-4" href="#">
                                <div class="mr-3">
                                    <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="8 12 12 16 16 12"/><line x1="12" y1="8" x2="12" y2="16"/></svg>
                                </div>
                                <span>
                                    Link to something
                                </span>
                            </a>
                        </div>
                        <div class="flex flex-col sm:flex-row justify-center pt-8">
                            <button class="bg-blue hover:bg-blue-dark text-2xl leading-none text-white font-semibold h-12 px-8 rounded-full whitespace-no-wrap mb-2 sm:mb-0 sm:mr-2">
                                Get started
                            </button>
                            <button class="bg-transparent text-2xl leading-none text-blue font-semibold hover:text-blue-dark h-12 px-8 border border-blue-lighter hover:border-blue-light rounded-full whitespace-no-wrap mt-2 sm:mt-0 sm:ml-2">
                                Learn more
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white py-8">
            <div class="w-5/6 max-w-lg ml-auto mr-auto mt-8 mb-8">
                <div class="flex flex-wrap -mx-6 -my-6">
                    <div class="w-full sm:w-1/2 px-6 py-6">
                        <div class="mb-8">
                            <svg class="align-middle text-red" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><polyline points="21 8 21 21 3 21 3 8"/><rect x="1" y="3" width="22" height="5"/><line x1="10" y1="12" x2="14" y2="12"/></svg>
                        </div>
                        <h3 class="text-3xl sm:text-4xl font-semibold tracking-tight leading-none mb-3">This is a small heading</h3>
                        <p class="text-lg sm:text-xl leading-normal text-grey-darker mb-8">If you don't plan to use the shadow utilities in your project, you can disable them entirely.</p>
                        <a class="text-lg leading-normal text-blue hover:text-blue-dark no-underline" href="#">Link to something</a>
                    </div>
                    <div class="w-full sm:w-1/2 px-6 py-6">
                        <div class="mb-8">
                            <svg class="align-middle text-teal" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="14.31" y1="8" x2="20.05" y2="17.94"/><line x1="9.69" y1="8" x2="21.17" y2="8"/><line x1="7.38" y1="12" x2="13.12" y2="2.06"/><line x1="9.69" y1="16" x2="3.95" y2="6.06"/><line x1="14.31" y1="16" x2="2.83" y2="16"/><line x1="16.62" y1="12" x2="10.88" y2="21.94"/></svg>
                        </div>
                        <h3 class="text-3xl sm:text-4xl font-semibold tracking-tight leading-none mb-3">This is a small heading</h3>
                        <p class="text-lg sm:text-xl leading-normal text-grey-darker mb-8">If you don't plan to use the shadow utilities in your project, you can disable them entirely.</p>
                        <a class="text-lg leading-normal text-blue hover:text-blue-dark no-underline" href="#">Link to something</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-grey-lightest py-8">
            <div class="w-5/6 max-w-2xl ml-auto mr-auto mt-8 mb-8">
                <div class="flex flex-wrap -mx-6 -my-6">
                    <div class="w-full sm:w-1/2 lg:w-1/4 px-6 py-6">
                        <div class="mb-8">
                            <svg class="align-middle text-teal" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><polyline points="21 8 21 21 3 21 3 8"/><rect x="1" y="3" width="22" height="5"/><line x1="10" y1="12" x2="14" y2="12"/></svg>
                        </div>
                        <h3 class="text-3xl font-semibold tracking-tight leading-none mb-3">This is a small heading</h3>
                        <p class="text-lg leading-normal text-grey-dark mb-8">If you don't plan to use the shadow utilities in your project, you can disable them entirely by setting the option.</p>
                        <a class="text-lg leading-normal text-blue hover:text-blue-dark no-underline" href="#">Link to something</a>
                    </div>
                    <div class="w-full sm:w-1/2 lg:w-1/4 px-6 py-6">
                        <div class="mb-8">
                            <svg class="align-middle text-pink" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="14.31" y1="8" x2="20.05" y2="17.94"/><line x1="9.69" y1="8" x2="21.17" y2="8"/><line x1="7.38" y1="12" x2="13.12" y2="2.06"/><line x1="9.69" y1="16" x2="3.95" y2="6.06"/><line x1="14.31" y1="16" x2="2.83" y2="16"/><line x1="16.62" y1="12" x2="10.88" y2="21.94"/></svg>
                        </div>
                        <h3 class="text-3xl font-semibold tracking-tight leading-none mb-3">This is a small heading</h3>
                        <p class="text-lg leading-normal text-grey-dark mb-8">If you don't plan to use the shadow utilities in your project, you can disable them entirely by setting the option.</p>
                        <a class="text-lg leading-normal text-blue hover:text-blue-dark no-underline" href="#">Link to something</a>
                    </div>
                    <div class="w-full sm:w-1/2 lg:w-1/4 px-6 py-6">
                        <div class="mb-8">
                            <svg class="align-middle text-purple" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="14.31" y1="8" x2="20.05" y2="17.94"/><line x1="9.69" y1="8" x2="21.17" y2="8"/><line x1="7.38" y1="12" x2="13.12" y2="2.06"/><line x1="9.69" y1="16" x2="3.95" y2="6.06"/><line x1="14.31" y1="16" x2="2.83" y2="16"/><line x1="16.62" y1="12" x2="10.88" y2="21.94"/></svg>
                        </div>
                        <h3 class="text-3xl font-semibold tracking-tight leading-none mb-3">This is a small heading</h3>
                        <p class="text-lg leading-normal text-grey-dark mb-8">If you don't plan to use the shadow utilities in your project, you can disable them entirely by setting the option.</p>
                        <a class="text-lg leading-normal text-blue hover:text-blue-dark no-underline" href="#">Link to something</a>
                    </div>
                    <div class="w-full sm:w-1/2 lg:w-1/4 px-6 py-6">
                        <div class="mb-8">
                            <svg class="align-middle text-orange" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="14.31" y1="8" x2="20.05" y2="17.94"/><line x1="9.69" y1="8" x2="21.17" y2="8"/><line x1="7.38" y1="12" x2="13.12" y2="2.06"/><line x1="9.69" y1="16" x2="3.95" y2="6.06"/><line x1="14.31" y1="16" x2="2.83" y2="16"/><line x1="16.62" y1="12" x2="10.88" y2="21.94"/></svg>
                        </div>
                        <h3 class="text-3xl font-semibold tracking-tight leading-none mb-3">This is a small heading</h3>
                        <p class="text-lg leading-normal text-grey-dark mb-8">If you don't plan to use the shadow utilities in your project, you can disable them entirely by setting the option.</p>
                        <a class="text-lg leading-normal text-blue hover:text-blue-dark no-underline" href="#">Link to something</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white py-8">
            <div class="w-5/6 max-w-lg ml-auto mr-auto mt-8 mb-8">
                <div class="flex flex-col md:flex-row items-center justify-center">
                        <p class="text-xl leading-normal mr-6 mb-8 md:mb-0 text-center md:text-left">This could be a call to action.</p>
                        <button class="bg-blue hover:bg-blue-dark text-xl leading-none text-white font-semibold h-10 px-6 rounded-full whitespace-no-wrap">
                            Get started
                        </button>
                </div>
            </div>
        </section>

        <div class="flex justify-center">
            <div class="bg-grey-light h-1 w-16 rounded"></div>
        </div>

        <section class="bg-white py-8">
            <div class="w-5/6 max-w-lg ml-auto mr-auto mt-8 mb-8">
                <div class="flex flex-col justify-center text-center pb-8">
                    <h2 class="text-5xl font-semibold leading-none tracking-tight mb-4">Flexible pricing for your inflexible needs</h2>
                    <h3 class="text-3xl text-blue-darker opacity-75 font-normal leading-none mb-8">14-day free trial. No credit card required.</h3>
                </div>

                <div class="bg-white rounded shadow-lg overflow-hidden">
                    <div class="flex flex-col-reverse md:flex-row">
                        <div class="flex-1">
                            <div class="bg-grey-lightest p-8">
                                <h5 class="text-xl font-semibold mb-8">What you get when you sign up:</h5>
                                <ul class="list-reset">
                                    <li class="mb-4">
                                        <div class="flex items-center">
                                            <div class="mr-4">
                                                <svg class="align-middle text-teal" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                                            </div>
                                            <p class="text-lg leading-normal">Unlimited everything</p>
                                        </div>
                                    </li>
                                    <li class="mb-4">
                                        <div class="flex items-center">
                                            <div class="mr-4">
                                                <svg class="align-middle text-teal" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                                            </div>
                                            <p class="text-lg leading-normal">Unlimited limitlessness</p>
                                        </div>
                                    </li>
                                    <li class="mb-4">
                                        <div class="flex items-center">
                                            <div class="mr-4">
                                                <svg class="align-middle text-teal" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                                            </div>
                                            <p class="text-lg leading-normal">Single sign-on</p>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div class="flex items-center">
                                            <div class="mr-4">
                                                <svg class="align-middle text-teal" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                                            </div>
                                            <p class="text-lg leading-normal">Code export HAHAHA</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="flex flex-col items-center p-8 h-full">
                                <div class="flex flex-1 mb-8">
                                    <div class="flex self-start items-center">
                                        <span class="text-3xl text-grey-dark leading-none mr-2">$</span>
                                        <span class="text-5xl font-semibold tracking-tight leading-none text-teal mr-3" style="font-size: 5.6rem;">499</span>
                                        <span class="text-xl text-grey-dark leading-none">/ month</span>
                                    </div>
                                </div>
                                <button class="bg-teal hover:bg-teal-dark text-xl leading-none text-white font-semibold h-10 px-6 rounded-full whitespace-no-wrap w-full">
                                    Take my money
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="w-5/6 max-w-md ml-auto mr-auto pt-8 mt-8 mb-8">
                <div class="flex flex-wrap -mx-6 -my-6">
                    <div class="w-full sm:w-1/2 px-6 py-6">
                        <h3 class="text-xl font-semibold leading-tight mb-3">Can I use these templates for free?</h3>
                        <p class="text-lg leading-normal text-grey-darker mb-8">Yes! These templates are open-source so you can copy, paste and edit them any way you see fit.</p>
                    </div>
                    <div class="w-full sm:w-1/2 px-6 py-6">
                        <h3 class="text-xl font-semibold leading-tight mb-3">Can I use these templates for free?</h3>
                        <p class="text-lg leading-normal text-grey-darker mb-8">Yes! These templates are open-source so you can copy, paste and edit them any way you see fit.</p>
                    </div>
                    <div class="w-full sm:w-1/2 px-6 py-6">
                        <h3 class="text-xl font-semibold leading-tight mb-3">Can I use these templates for free?</h3>
                        <p class="text-lg leading-normal text-grey-darker mb-8">Yes! These templates are open-source so you can copy, paste and edit them any way you see fit.</p>
                    </div>
                    <div class="w-full sm:w-1/2 px-6 py-6">
                        <h3 class="text-xl font-semibold leading-tight mb-3">Can I use these templates for free?</h3>
                        <p class="text-lg leading-normal text-grey-darker mb-8">Yes! These templates are open-source so you can copy, paste and edit them any way you see fit.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-grey-lightest py-8">
            <div class="w-5/6 max-w-2xl ml-auto mr-auto mt-8">
                <div class="flex flex-wrap -mx-6 -my-6">
                    <div class="w-full lg:w-1/3 px-6 py-6">
                        <a class="no-underline" href="#">
                            <div class="bg-pink-dark rounded shadow-lg overflow-hidden p-8">
                                <h5 class="text-2xl text-white mb-4">Small heading</h5>
                                <p class="text-lg text-white leading-tight">This card links to a deeper screen with more info on some topic.</p>
                            </div>
                        </a>
                    </div>
                    <div class="w-full lg:w-1/3 px-6 py-6">
                        <a class="no-underline" href="#">
                            <div class="bg-red-light rounded shadow-lg overflow-hidden p-8">
                                <h5 class="text-2xl text-white mb-4">Small heading</h5>
                                <p class="text-lg text-white leading-tight">This card links to a deeper screen with more info on some topic.</p>
                            </div>
                        </a>
                    </div>
                    <div class="w-full lg:w-1/3 px-6 py-6">
                        <a class="no-underline" href="#">
                            <div class="bg-purple-light rounded shadow-lg overflow-hidden p-8">
                                <h5 class="text-2xl text-white mb-4">Small heading</h5>
                                <p class="text-lg text-white leading-tight">This card links to a deeper screen with more info on some topic.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-grey-lightest py-8">
            <div class="w-5/6 max-w-xl ml-auto mr-auto my-8">
                <div class="flex md:items-center flex-col md:flex-row md:justify-between">
                    <div class="mb-8 md:mb-0 md:pr-4">
                        <h3 class="text-4xl font-normal tracking-tight leading-none mb-3">This is a medium heading</h3>
                        <h4 class="text-3xl text-grey-dark font-normal leading-tight">This might be used for a call to action.</h4>
                    </div>
                    <div class="md:pl-4">
                        <div class="flex items-center">
                            <button class="bg-blue hover:bg-blue-dark text-xl leading-none text-white font-semibold h-10 px-6 rounded-full whitespace-no-wrap mr-2">
                                Get started
                            </button>
                            <button class="bg-transparent text-xl leading-none text-blue font-semibold hover:text-blue-dark h-10 px-6 border border-blue-lighter hover:border-blue-light rounded-full whitespace-no-wrap ml-2">
                                Learn more
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="bg-grey-lightest py-8">
            <div class="flex flex-col-reverse md:flex-row md:items-center md:justify-between px-8">
                <small class="block text-sm text-grey">
                    &copy; CompanyName
                </small>
                <div class="mb-4 md:mb-0">
                    <div class="flex flex-col md:flex-row md:items-center">
                        <a class="text-xl md:text-base leading-normal text-grey-dark hover:text-black no-underline mb-4 md:mb-0 md:ml-8" href="#">Link</a>
                        <a class="text-xl md:text-base leading-normal text-grey-dark hover:text-black no-underline mb-4 md:mb-0 md:ml-8" href="#">Another link</a>
                        <a class="text-xl md:text-base leading-normal text-grey-dark hover:text-black no-underline mb-4 md:mb-0 md:ml-8" href="#">Link to something</a>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>

