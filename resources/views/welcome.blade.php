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
                    LookingFor
                </span>
                <div class="">
                    <div class="flex items-center">
                        <a class="text-lg leading-normal text-blue hover:text-blue-dark no-underline ml-8" href="#">Login as Seller</a>
                        <a class="text-lg leading-normal text-blue hover:text-blue-dark no-underline ml-8" href="#">Login as User</a>
                    </div>
                </div>
            </div>
        </header>
        <section class="bg-blue-lightest h-full py-8">
            <div class="w-5/6 max-w-lg ml-auto mr-auto h-full">
                <div class="flex items-center justify-center text-center h-full">
                    <div>
                        <h1 class="text-4xl sm:text-5xl font-semibold leading-none tracking-tight mb-4">Find great deals that fit your budget.</h1>
                        <h2 class="text-2xl sm:text-3xl text-blue-darker opacity-75 font-normal leading-tight mb-8">We do the hard work, just tell us what you want:</h2>
                        <div class="flex flex-col sm:flex-row items-center justify-center sm:pt-6 mb-6 sm:mb-6">
                                <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-full">
                                        <div class="mb-4">
                                          <label class="block text-grey-darker text-sm font-bold mb-2" for="product-description">
                                            Product Description
                                          </label>
                                          <textarea class="shadow appearance-none border rounded h-48 w-full py-2 px-3 text-grey-darker" id="product-description" placeholder="Describe the product you are looking for e.g">
                                          </textarea>
                                        </div>
                                        <div class="mb-6">
                                          <label class="block text-grey-darker text-sm font-bold mb-2" for="budget">
                                            Budget
                                          </label>
                                          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker mb-3" id="budget" type="number" placeholder="">
                                        </div>
                                        <div class="flex items-center justify-between">
                                          <button class="bg-green hover:bg-green-dark text-white font-bold py-2 px-4 rounded" type="button">
                                            Submit Request
                                          </button>
                                          <a class="inline-block align-baseline font-bold text-sm text-blue hover:text-blue-darker" href="#">
                                            I need help
                                          </a>
                                        </div>
                                      </form>
                            </div>
                    </div>
                </div>
            </div>
        </section

        <section class="bg-grey-lightest py-8">
            <div class="w-5/6 max-w-xl ml-auto mr-auto my-8">
                <div class="flex md:items-center flex-col md:flex-row md:justify-between">
                    <div class="mb-8 md:mb-0 md:pr-4">
                        <h3 class="text-4xl font-normal tracking-tight leading-none mb-3">I have stuff to sell</h3>
                        <h4 class="text-3xl text-grey-dark font-normal leading-tight">You are in the right place.</h4>
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
                    &copy; LookingFor
                </small>
                <div class="mb-4 md:mb-0">
                    <div class="flex flex-col md:flex-row md:items-center">
                        <a class="text-xl md:text-base leading-normal text-grey-dark hover:text-black no-underline mb-4 md:mb-0 md:ml-8" href="#">Android App</a>
                        <a class="text-xl md:text-base leading-normal text-grey-dark hover:text-black no-underline mb-4 md:mb-0 md:ml-8" href="#">iOS App</a>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>