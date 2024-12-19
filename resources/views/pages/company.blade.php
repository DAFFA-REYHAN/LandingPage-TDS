@extends('app')

@section('content')
    <!--header-->
    <div class="min-h-[80vh] bg-[#2B4950] bg-cover bg-center bg-no-repeat flex justify-center items-center py-20 px-4" style="background-image: url('{{ asset('img/img(20).png') }}');">
        <h1 class="text-4xl font-bold text-center text-white mb-4">We help you provide the best solutions <br> for everyone in the company.</h1>
    </div>
    <!--header end-->

    <!--sec 1-->
    <div class="my-12 mx-auto max-w-6xl">
        <div class="grid grid-cols-2 justify-between">
            <div class="flex flex-col">
                <h1 class="text-3xl font-bold text-[#2B4950] mb-4">Welcome! <br><span class="text-[#62A6B6]"> Our Company</span></h1>
                <p>TDS is a company specializing in IT distribution, in addition to providing state-of-the-art technology, TDS places a strong emphasis on transparency regarding IT assets. The company is committed to ensuring that its clients have a comprehensive understanding of their technological resources, which is essential for informed decision-making and strategic planning in the ever-evolving landscape of information technology.</p>
            </div>
            <img src="{{ asset('img/img(21).png') }}" class="max-w items-end h-96" alt="FlowBite Logo" />
        </div>
    </div>
    <!--sec 1 end-->



@endsection