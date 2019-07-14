@extends('layouts.makerSpace')

@section('content')


<!-- Start Maker Space Section -->

       @include('makerSpace.sections.makerSpaceSection')
    <!-- Our Works Section -->
       @include('makerSpace.sections.ourWorks')
    <!-- End Section -->


    <!-- Start Our Team Section -->
    @include('makerSpace.sections.ourTeam')
   
    <!-- End Our Team Section -->
    
    
    <!-- Start Galary  -->
    @include('makerSpace.sections.galary')

    <!-- End Galary -->

    <!-- Start Section Demands -->
    @include('makerSpace.sections.demands')
    <!-- End Section Demands -->


    <!-- Electronic Store Section -->
    @include('makerSpace.sections.store')

    <!-- End Section -->

    <!-- New Section  Our Training -->
    @include('makerSpace.sections.training')

    <!-- End New Section Our Training-->





@endsection