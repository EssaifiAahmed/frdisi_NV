@extends('layouts.master')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-4">
            <h1 class="display-3 animated slideInDown">Contacter-nous</h1>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <p class="section-title bg-white text-start text-primary pe-3">Contact</p>
                    <iframe class="w-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d585.5569287408972!2d-7.4065166385572025!3d33.66200004572405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7b5069c6c244b%3A0xa9f93862b206b273!2sSUPTECH%20SANTE!5e1!3m2!1sfr!2sma!4v1763026276296!5m2!1sfr!2sma"
                        frameborder="0" style="height: 410px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
                <div class="col-lg-7 wow fadeIn" data-wow-delay="0.3s">
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Votre Nom et Prénom">
                                    <label for="name">Votre Nom et Prénom</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="votre email">
                                    <label for="email">votre email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" name="Sujet" placeholder="Sujet">
                                    <label for="Sujet">Sujet</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 250px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-4 lg-md-12" type="submit">Envoyé</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
