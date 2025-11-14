@extends('layouts.master')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-4">
            <h1 class="display-3 animated slideInDown">Brevets</h1>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12 wow fadeIn" data-wow-delay="0.1s">
                    <p class="section-title bg-white text-start text-primary pe-3">Liste des brevets et des projets en cours
                    </p>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead style="background-color: #627B2B;">
                                <tr class="text-white">
                                    <th>Patente nombre</th>
                                    <th>Titre</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>69024</td>
                                    <td>Intelligence Portable Device for Monitoring Cardiac Activity</td>
                                </tr>
                                <tr>
                                    <td>69148</td>
                                    <td>Network of Smart Electric Wheelchairs for Assisting People with Reduced Mobility
                                    </td>
                                </tr>
                                <tr>
                                    <td>69028</td>
                                    <td>Design and Development of an Intelligent Mini Medical Centrifuge</td>
                                </tr>
                                <tr>
                                    <td>69023</td>
                                    <td>Design and Development of an Intelligent Device for Dialysis</td>
                                </tr>
                                <tr>
                                    <td>63556</td>
                                    <td>Design and Development of a Smart Connected Medical Device for Real-Time Prostate
                                        Condition Detection Using an Intelligent Imaging System</td>
                                </tr>
                                <tr>
                                    <td>63555</td>
                                    <td>Experimental Development/Prototyping of a Long-Duration Non-Invasive
                                    </td>
                                </tr>
                                <tr>
                                    <td>63549</td>
                                    <td>Glucometer Device Design and Implementation of a Smart Medical Bracelet
                                    </td>
                                </tr>
                                <tr>
                                    <td>69025</td>
                                    <td>Design and Development of an Intelligent Device for Leukemia Diagnosis
                                    </td>
                                </tr>
                                <tr>
                                    <td>In progress</td>
                                    <td>Recent Technological Advancements in Hospital Waste Management
                                    </td>
                                </tr>
                                <tr>
                                    <td>In progress</td>
                                    <td>Development of an Intelligent Solution for Early Diagnosis of Prostate Cancer
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
