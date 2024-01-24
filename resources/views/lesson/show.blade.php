@extends(auth()->guest() ? 'layouts.top-bar' : 'layouts.top-bar-auth')


@section('content')
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <div class="w-full min-h-screen h-full items-center">
        <div class="w-full py-10 text-center text-4xl">
            Lesson
            <div class="mx-auto w-16 md:w-32 lg:w-48">
                <img src="/img/ccug_logo.png" alt="Contoh">
            </div>
            <div class="container mx-auto w-7/12 text-lg">
                <p class="text-justify">Lipsum dolor sit amet consectetur, adipisicing elit. Sint nihil fuga assumenda,
                    voluptates temporibus
                    laboriosam facere optio iusto, eius pariatur nobis blanditiis praesentium eaque doloribus quam eligendi.
                    Qui, vitae labore.Lipsum dolor sit amet consectetur, adipisicing elit. Sint nihil fuga assumenda,
                    voluptates temporibus
                    laboriosam facere optio iusto, eius pariatur nobis blanditiis praesentium eaque doloribus quam eligendi.
                    Qui, vitae laboreLipsum dolor sit amet consectetur, adipisicing elit. Sint nihil fuga assumenda,
                    voluptates temporibus
                    laboriosam facere optio iusto, eius pariatur nobis blanditiis praesentium eaque doloribus quam eligendi.
                    Qui, vitae labore</p>

                <p class="text-justify">Lipsum dolor sit amet consectetur, adipisicing elit. Sint nihil fuga assumenda,
                    voluptates temporibus
                    laboriosam facere optio iusto, eius pariatur nobis blanditiis praesentium eaque doloribus quam eligendi.
                    Qui, vitae labore.Lipsum dolor sit amet consectetur, adipisicing elit. Sint nihil fuga assumenda,
                    voluptates temporibus
                    laboriosam facere optio iusto, eius pariatur nobis blanditiis praesentium eaque doloribus quam eligendi.
                    Qui, vitae laboreLipsum dolor sit amet consectetur, adipisicing elit. Sint nihil fuga assumenda,
                    voluptates temporibus
                    laboriosam facere optio iusto, eius pariatur nobis blanditiis praesentium eaque doloribus quam eligendi.
                    Qui, vitae labore</p>
            </div>
            <div class="container mx-auto">
                <button class="rounded bg-blue-700 p-2 text-sm text-right">Course</button>
            </div>




        </div>

        <div class="container mx-auto px-32">
            <div class="flex mx-auto space-x-4">
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mb-4">
                    <a href="#">
                        <img class="rounded-t-sm w-16 md:w-32 lg:w-48 mx-auto" src="/img/ccug_logo.png" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                            technology
                            acquisitions of 2021 so far, in reverse chronological order.</p>
                        <a href="#"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mb-4">
                    <a href="#">
                        <img class="rounded-t-sm w-16 md:w-32 lg:w-48 mx-auto" src="/img/ccug_logo.png" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                            technology
                            acquisitions of 2021 so far, in reverse chronological order.</p>
                        <a href="#"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mb-4">
                    <a href="#">
                        <img class="rounded-t-sm w-16 md:w-32 lg:w-48 mx-auto" src="/img/ccug_logo.png" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                            technology
                            acquisitions of 2021 so far, in reverse chronological order.</p>
                        <a href="#"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mb-4">
                    <a href="#">
                        <img class="rounded-t-sm w-16 md:w-32 lg:w-48 mx-auto" src="/img/ccug_logo.png" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                            technology
                            acquisitions of 2021 so far, in reverse chronological order.</p>
                        <a href="#"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Tambahkan kartu-kartu berikutnya dengan struktur yang sama -->

            </div>
        </div>

    </div>

    {{-- <div class="w-full py-20 justify-items-center grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-y-24">
    <a href="{{route('lesson.index',['uid'=>'RSA'])}}" class="shadow-lg shadow-black rounded-2xl bg-my_secondary mb-10 mr-12 w-72 items-center flex flex-col px-10 py-5 border-2 border-gray-50">
        <div class="text-4xl pb-3">
            RSA
        </div>
        <img src="{{  url('img/keys-01.jpg') }}" class="h-64 w-48 rounded-lg">
        <div class="mt-5 p-2 text-xl bg-my_primary rounded-lg shadow-lg shadow-black ">5 lessons</div>
    </a>
    
    </div> --}}
    </div>
@endsection
