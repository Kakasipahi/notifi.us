@extends('_layouts.master')
@section('title', 'Contact')
@section('body')
@include('_layouts.contact')


<div class="bg-gradient py-16 w-full px-24 shadow-inner mx-auto">
    <div class="flex flex-wrap w-10/12 mx-auto">
        <div class="w-3/5">
            <div class="mx-auto text-left align-middle">
                <div class="bg-white shadow rounded rounded-tr-none px-6 py-8">

                    <h1 class="text-purple-600 font-bold text-4xl">Contact</h1>

                    <h4 class="border-b-4 border-purple-700 w-2/12 my-4"></h4>

                    <p class="text-gray-600">
                        We don't use a traditional contact form: <strong>spam</strong>, un-necessary <strong>data collection</strong>, and <strong>awkward forms</strong>?
                        <span class="font-bold text-indigo-600">No thanks.</span>
                    </p>

                    <p class="text-indigo-700 text-xl block my-4">
                        The best way to contact us is by <strong>email</strong> or <strong>phone</strong>.
                    </p>

                    <div class="flex flex-wrap justify-center">
                        <a alt="Call us!" class="rounded-lg block text-lg uppercase text-purple-100 inline-block shadow bg-purple-700 my-6 px-5 py-3 hover:bg-purple-900 hover:text-white font-bold mx-auto" href="tel:+1 888-966-9830">
                            <i class="fas fa-phone-square text-purple-300"></i> Give us a call
                        </a>

                        <a alt="NotifiUs, LLC" class="rounded-lg block text-lg uppercase text-purple-100 inline-block shadow bg-purple-700 my-6 px-5 py-3 hover:bg-purple-900 hover:text-white font-bold mx-auto" href="mailto:support@notifi.us">
                            <i class="fas fa-envelope-square text-purple-300"></i> Send an email
                        </a>
                    </div>

                    <p class="text-gray-600 text-sm block my-4">
                       You can also send us messages on our social media accounts!
                    </p>

                    <!--
                    <hr class="my-4">

                    <p class="text-gray-600">
                        Subscribe to the NotifiUs <strong class="uppercase text-purple-600">Call</strong><strong class="uppercase text-blue-500">Theory</strong> newsletter!
                    </p>

                    <a alt="NotifiUs, LLC" class="justify-center mx-auto w-auto block hover:bg-purple-400 text-purple-900 hover:text-purple-100 text-lg uppercase px-5 py-3 bg-purple-200 inline-block my-4 rounded-lg shadow font-bold" href="https://mailchi.mp/f9431b8b1b6d/call-theory">
                        <i class="fas fa-newspaper text-purple-600"></i> Subscribe to our newsletter
                    </a>
                    -->


                </div>
            </div>
        </div>
        <div class="w-2/5 h-100">
            <div class="mx-auto text-left align-middle">
                <div class="bg-gray-200 shadow rounded rounded-bl-none rounded-tl-none  px-4 pt-8 py-8 text-center">
                   <address class="font-bold text-gray-700 my-4">
                       <span class="text-2xl">NotifiUs, LLC</span>
                       <br>
                       <span class="text-xl text-indigo-600">PO Box 2051</span>
                       <br>
                       Dublin, Ohio 43017
                       <br>
                       <span class="text-indigo-500">United State of America</span>
                   </address>
                   <hr class="my-2">
                   <i class="fas fa-phone text-gray-400 text-sm"></i> <a class="text-gray-700" href="tel:+1 888-966-9830">+1 888-966-9830</a>
                   <hr class="my-2">
                   <i class="fas fa-phone text-gray-400 text-sm"></i> <a class="text-gray-700" href="tel:+1 614-682-7015">+1 614-682-7015</a>
                   <hr class="my-2">
                   <i class="fas fa-envelope text-gray-400 text-sm"></i> <a class="font-bold text-purple-600 hover:text-purple-800 text-lg" href="mailto:support@notifi.us">support@notifi.us</a>
                    <br class="mb-6">
                    <a title="Find us on Facebook" class="text-blue-600 hover:text-blue-700" href="https://www.facebook.com/NotifiUsConsulting">
                        <i class="fab fa-facebook"></i>
                    </a>

                    <a title="Follow us on Twitter" class="text-blue-400 hover:text-blue-500" href="https://twitter.com/notifius">
                        <i class="fab fa-twitter"></i>
                    </a>

                    <a title="Join us on LinkedIn!" class="text-blue-700 hover:text-blue-800" href="https://www.linkedin.com/company/notifius">
                        <i class="fab fa-linkedin"></i>
                    </a>

                    <a title="Open source on Github" class="text-gray-600 hover:text-gray-700" href="https://github.com/notifius">
                        <i class="fab fa-github"></i>
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
