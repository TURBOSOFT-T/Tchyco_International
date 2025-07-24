@extends('layouts.blog')
@php
    $title = \App\Helpers\TranslationHelper::TranslateText(' Mon Compte');
    $subtitle = \App\Helpers\TranslationHelper::TranslateText('Mon compte');
@endphp

@section('titre', \App\Helpers\TranslationHelper::TranslateText('Mon compte'))
@section('blog')
    @php
        $config = DB::table('configs')->first();

        $service = DB::table('services')->get();
        $produit = DB::table('produits')->get();
        // $categories = DB::table('categories')->first();
    @endphp
    <x-strickyHeader />
    <x-sidebar />




    <br><br>

    <div class="axil-dashboard-area axil-section-gap">
        <div class="container">
            <div class="axil-dashboard-warp">

                <div class="row">


                    <div class="col-xl-3 col-md-4 service-details__all-category">
                        <h3 class="service-details__category-title">
                            {{ \App\Helpers\TranslationHelper::TranslateText('Mon compte') }}
                        </h3>
                        <ul class="service-details__all-category-list list-unstyled">
                            <aside class="axil-dashboard-aside">
                                <nav class="axil-dashboard-nav">
                                    <div class="nav nav-tabs" role="tablist">

                                        <a class="nav-item nav-link active" data-bs-toggle="tab" href="#nav-dashboard"
                                            role="tab" aria-selected="true"><i class="fas fa-th-large"></i>
                                            Dashboard</a>
                                        <a class="nav-item nav-link" data-bs-toggle="tab" href="#nav-orders" role="tab"
                                            aria-selected="false"><i class="fas fa-shopping-basket"></i>
                                            {{ \App\Helpers\TranslationHelper::TranslateText('Mes Inscriptions') }}</a>
                                        <a class="nav-item nav-link" data-bs-toggle="tab" href="#nav-comments"
                                            role="tab" aria-selected="false">
                                            <i class="fas fa-heart"></i>
                                            {{ \App\Helpers\TranslationHelper::TranslateText('Mes commentaires') }}
                                        </a>

                                        <a class="nav-item nav-link" data-bs-toggle="tab" href="#nav-meet" role="tab"
                                            aria-selected="false"><i class="fas fa-video"
                                                style="font-size: 20px; color: #9b59b6;"></i>
                                            {{ \App\Helpers\TranslationHelper::TranslateText('Mes Meets') }}</a>

                                        <a class="nav-item nav-link" data-bs-toggle="tab" href="#nav-account" role="tab"
                                            aria-selected="false"><i class="fas fa-user"></i>
                                            {{ \App\Helpers\TranslationHelper::TranslateText('Mon profile') }}</a>
                                        {{-- <a class="nav-item nav-link" data-bs-toggle="tab" href="#nav-gallery" role="tab"
                                            aria-selected="false"> <i class="fas fa-images"></i>
                                            {{ \App\Helpers\TranslationHelper::TranslateText('Mes images') }}</a>
 --}}
                                        <a class="nav-item nav-link" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();   document.getElementById('logout-form').submit();">
                                            <i class="fas fa-sign-out-alt"></i>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>

                                            {{ \App\Helpers\TranslationHelper::TranslateText('Déconnexion') }}
                                        </a>

                                    </div>
                                </nav>
                            </aside>

                        </ul>
                    </div>
                    <div class="col-xl-9 col-md-8">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="nav-dashboard" role="tabpanel">
                                <div class="axil-dashboard-overview">
                                    <div class="tab-pane fade show active" id="v-pills-dashboard" role="tabpanel"
                                        aria-labelledby="v-pills-dashboard-tab">
                                        <div class="dashboard-area box--shadow">


                                            <div class="row pt-1 g-1">

                                                <div class="col-md-3 col-sm-6">
                                                    <div class="dashboard-card hover-border1 wow fadeInDown"
                                                        data-wow-duration="1.5s" data-wow-delay=".6s">
                                                        <div class="header">
                                                            <h5>{{ \App\Helpers\TranslationHelper::TranslateText('Mes inscriptions') }}
                                                            </h5>
                                                        </div>
                                                        <div class="row body">
                                                            <div class="col-sm-6 col-6 counter-item">
                                                                <h2>{{ $totalInscription ?? '00' }}</h2>
                                                            </div>
                                                            <div class="col-sm-6 col-6 icon">
                                                                <i class="fas fa-shopping-cart"
                                                                    style="font-size: 50px; color: #3498db;"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-md-3 col-sm-6">
                                                    <div class="dashboard-card hover-border1 wow fadeInDown"
                                                        data-wow-duration="1.5s" data-wow-delay=".4s">
                                                        <div class="header">
                                                            <h5>
                                                                {{ \App\Helpers\TranslationHelper::TranslateText('Inscriptions en cours') }}
                                                            </h5>
                                                        </div>
                                                        <div class=" row body">
                                                            <div class=" col-sm-6 col-6counter-item">
                                                                <h2>{{ $inscriptionsEnCours ?? '00' }}</h2>
                                                            </div>
                                                            <div class=" col-sm-6 col-6icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="50"
                                                                    height="50" viewBox="0 0 50 50">
                                                                    <path
                                                                        d="M10.5364 0.0619668C9.98562 0.212036 9.33157 0.562198 8.96439 0.89235C8.76932 1.07243 7.5645 2.79323 6.29083 4.72412C5.01717 6.645 3.18125 9.42629 2.20592 10.887C1.24206 12.3476 0.358527 13.7183 0.243782 13.9384C0.0487155 14.3085 0.037241 15.239 0.0028176 30.2859C-0.00865689 39.7603 0.0142921 46.5134 0.083139 46.9136C0.324103 48.4543 1.57482 49.6048 3.30747 49.895C4.13363 50.035 45.8548 50.035 46.681 49.895C47.5072 49.7549 48.1842 49.4447 48.7808 48.9245C49.4119 48.3743 49.7676 47.754 49.9053 46.9636C50.0316 46.1932 50.0316 14.8888 49.9053 14.3185C49.848 14.0684 49.0333 12.7378 47.8629 10.967C46.7843 9.34625 44.8795 6.49493 43.6403 4.62407C42.401 2.75321 41.2192 1.07243 41.0241 0.89235C40.8175 0.702262 40.4045 0.432138 40.0832 0.292073L39.5095 0.0219484L25.1664 0.00193914C17.2834 -0.00806548 10.697 0.0219484 10.5364 0.0619668ZM23.3878 7.62546V12.3776H14.2082H5.02864L5.18928 12.1475C5.28108 12.0275 6.34821 10.4167 7.55303 8.57589C8.76932 6.73504 10.1233 4.6941 10.5593 4.0438L11.3511 2.87326H17.3637H23.3878V7.62546ZM40.4848 5.62453C41.4716 7.10522 42.8141 9.13615 43.4682 10.1266C44.1222 11.1171 44.7303 12.0275 44.8221 12.1475L44.9828 12.3776H35.8491H26.7154V7.62546V2.87326L32.6936 2.89327L38.6833 2.92329L40.4848 5.62453ZM46.681 30.9862C46.681 46.5634 46.681 46.6935 46.4515 46.8936C46.222 47.0937 46.0729 47.0937 24.9942 47.0937C3.91562 47.0937 3.76645 47.0937 3.53696 46.8936C3.30747 46.6935 3.30747 46.5634 3.30747 30.9862V15.279H24.9942H46.681V30.9862Z" />
                                                                    <path
                                                                        d="M30.7315 26.094C30.5708 26.1541 28.7005 27.7148 26.5662 29.5656L22.6993 32.9372L21.1159 31.5666C19.234 29.9358 18.8554 29.7657 17.9259 30.1459C17.3293 30.396 17.0424 30.8863 17.0998 31.5466L17.1572 32.1068L19.4406 34.0977C20.6913 35.1982 21.8617 36.1687 22.0338 36.2487C22.4354 36.4288 23.078 36.4288 23.4796 36.2487C23.8583 36.0686 32.7165 28.3251 32.9001 28.0149C33.0952 27.6748 33.0493 26.9744 32.7969 26.6143C32.4067 26.054 31.5003 25.8239 30.7315 26.094Z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-3 col-sm-6">
                                                    <div class="dashboard-card hover-border1 wow fadeInDown"
                                                        data-wow-duration="1.5s" data-wow-delay=".6s">
                                                        <div class="header">
                                                            <h5>{{ \App\Helpers\TranslationHelper::TranslateText('Mes réunions Zoom') }}
                                                            </h5>
                                                        </div>
                                                        <div class="row body">
                                                            <div class="col-sm-6 col-6 counter-item">
                                                                <h2>{{ $totalZoomMeetings ?? '00' }}</h2>
                                                            </div>
                                                            <div class="col-sm-6 col-6 icon">
                                                                <i class="fas fa-video"
                                                                    style="font-size: 50px; color: #9b59b6;"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-md-3 col-sm-6">
                                                    <div class="dashboard-card hover-border1 wow fadeInDown"
                                                        data-wow-duration="1.5s" data-wow-delay=".6s">
                                                        <div class="header">
                                                            <h5>{{ \App\Helpers\TranslationHelper::TranslateText('Mes commentaires') }}
                                                            </h5>
                                                        </div>
                                                        <div class="row body">
                                                            <div class="col-sm-6 col-6 counter-item">
                                                                <h2>{{ $totalcomments ?? '00' }}</h2>
                                                            </div>
                                                            <div class="col-sm-6 col-6 icon">
                                                                <i class="fas fa-comment-dots"
                                                                    style="font-size: 30px; color: #f39c12;"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                            </div>

                                            <table class="table text-white font-bold">
                                                <thead>
                                                    <tr>
                                                        <th>Icône
                                                            {{ \App\Helpers\TranslationHelper::TranslateText('Icône') }}
                                                        </th>
                                                        <th>
                                                            {{ \App\Helpers\TranslationHelper::TranslateText('Section') }}
                                                        </th>
                                                        <th>
                                                            {{ \App\Helpers\TranslationHelper::TranslateText('Nombre') }}
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- Commandes -->
                                                    <tr>
                                                        <td>
                                                            <i class="fas fa-shopping-cart"
                                                                style="font-size: 30px; color: #3498db;"></i>
                                                        </td>
                                                        <td>

                                                            {{ \App\Helpers\TranslationHelper::TranslateText('Mes inscriptions') }}
                                                        </td>
                                                        <td>{{ $totalInscription ?? '00' }}</td>
                                                    </tr>

                                                    <!-- Avis -->
                                                    <tr>
                                                        <td>
                                                            <i class="fas fa-comment-dots"
                                                                style="font-size: 30px; color: #f39c12;"></i>
                                                        </td>
                                                        <td>
                                                            {{ \App\Helpers\TranslationHelper::TranslateText('Mes commentaires') }}
                                                        </td>
                                                        <td>{{ $totalcomments ?? ' ' }}</td>
                                                    </tr>


                                                    <tr>
                                                        <td>
                                                            <i class="fas fa-video"
                                                                style="font-size: 50px; color: #9b59b6;"></i>
                                                        </td>
                                                        <td>

                                                            {{ \App\Helpers\TranslationHelper::TranslateText('Mes réunions zoom') }}
                                                        </td>
                                                        <td>{{ $totalZoomMeetings ?? ' ' }}</td>
                                                    </tr>

                                                    <!-- Favoris -->

                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-orders" role="tabpanel">
                                <div class="axil-dashboard-order">
                                    <div class="table-responsive">
                                        <table class="table text-white font-bold">
                                            <thead>
                                                <tr>

                                                    <th scope="col">
                                                        {{ \App\Helpers\TranslationHelper::TranslateText('Produit') }}
                                                    </th>



                                                    <th scope="col">
                                                        {{ \App\Helpers\TranslationHelper::TranslateText('Date de debut') }}
                                                    </th>


                                                    <th scope="col">
                                                        {{ \App\Helpers\TranslationHelper::TranslateText('Status') }}
                                                    </th>
                                                    <th scope="col">

                                                        {{ \App\Helpers\TranslationHelper::TranslateText('Action') }}
                                                    </th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($inscriptions as $key => $inscription)
                                                    <tr>
                                                        <td data-label="Image">
                                                            {{ $inscription->event->titre ?? 'Événement non défini' }}
                                                        </td>


                                                        <td data-label="price">
                                                            <p><strong></strong>
                                                                {{ $inscription->event->start ?? 'Non précisé' }}</p>
                                                        </td>
                                                        <td data-label="Status" class="text-green">

                                                            {{ \App\Helpers\TranslationHelper::TranslateText($inscription->statut) }}
                                                        </td>
                                                        <td>


                                                            <a {{-- href="{{ route('print_inscription', ['id' => $inscription->id]) }}" --}} class="axil-btn btn-bg-primary2">


                                                                {{ \App\Helpers\TranslationHelper::TranslateText('Facture') }}</a>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="6 ">

                                                            <div class="text-center p-5"><img width="50"
                                                                    height="50"
                                                                    src="https://img.icons8.com/?size=100&id=15867&format=png&color=000000"
                                                                    alt="shopping-cart--v1" />
                                                                <br>
                                                                <h5>

                                                                    {{ \App\Helpers\TranslationHelper::TranslateText('Pas de inscriptions enregistrées pour le moment') }}.
                                                                </h5>

                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforelse



                                            </tbody>
                                        </table>

                                        <div class="table-pagination">

                                            <nav class="shop-pagination">
                                                <ul class="pagination-list">
                                                    {{ $inscriptions->links('pagination::bootstrap-4') }}
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-comments" role="tabpanel">
                                <div class="axil-dashboard-order">
                                    <p> {{ \App\Helpers\TranslationHelper::TranslateText('Mes Commentaires') }}</p>
                                    <div class="table-responsive">
                                        <table class="table text-white font-bold">
                                            <thead>
                                                <tr>

                                                    <th scope="col">
                                                        {{ \App\Helpers\TranslationHelper::TranslateText('Libellé actualité') }}
                                                    </th>



                                                    <th scope="col">
                                                        {{ \App\Helpers\TranslationHelper::TranslateText('Date') }}
                                                    </th>
                                                    <th scope="col">
                                                        {{ \App\Helpers\TranslationHelper::TranslateText('Message') }}
                                                    </th>

                                                    <th scope="col">
                                                        {{ \App\Helpers\TranslationHelper::TranslateText('Status') }}
                                                    </th>
                                                    <th scope="col">
                                                        {{ \App\Helpers\TranslationHelper::TranslateText('Action') }}
                                                    </th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($comments as $key => $comment)
                                                    <tr>
                                                        <td data-label="Image">
                                                            {{ $comment->blog->title ?? 'Événement non défini' }}
                                                        </td>


                                                        <td data-label="price">
                                                            <p><strong></strong>
                                                                {{ $comment->created_at ?? 'Non précisé' }}</p>
                                                        </td>
                                                        <td>
                                                            {{ $comment->body ?? 'Non précisé' }}
                                                        </td>

                                                        <td data-label="Status">
                                                            @if ($comment->active == 1)
                                                                <span class="badge bg-success text-white fw-bold">
                                                                    {{ \App\Helpers\TranslationHelper::TranslateText('Actif') }}

                                                                </span>
                                                            @else
                                                                <span class="badge bg-warning text-dark fw-bold">
                                                                    {{ \App\Helpers\TranslationHelper::TranslateText('Inactif') }}

                                                                </span>
                                                            @endif
                                                        </td>




                                                        <td>
                                                            <button class="btn btn-danger btn-sm delete-comment"
                                                                data-id="{{ $comment->id }}">

                                                                {{ \App\Helpers\TranslationHelper::TranslateText('Supprimer') }}
                                                            </button>
                                                        </td>




                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="6 ">

                                                            <div class="text-center p-5"><img width="50"
                                                                    height="50"
                                                                    src="https://img.icons8.com/?size=100&id=15867&format=png&color=000000"
                                                                    alt="shopping-cart--v1" />
                                                                <br>
                                                                <h5>

                                                                    {{ \App\Helpers\TranslationHelper::TranslateText('Pas de commentaires enregistrés pour le moment') }}.
                                                                </h5>

                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforelse



                                            </tbody>
                                        </table>

                                        <div class="table-pagination">

                                            <nav class="shop-pagination">
                                                <ul class="pagination-list">
                                                    {{ $comments->links('pagination::bootstrap-4') }}
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="tab-pane fade" id="nav-account" role="tabpanel">
                                <div class="col-lg-12">
                                    <div class="row">

                                        <div class="col-xl-8">

                                            <div class=" mb-4">
                                                <div class="card-header">
                                                    {{ \App\Helpers\TranslationHelper::TranslateText('Mon profile') }}
                                                </div>
                                                <br>
                                                <div class="">
                                                    @livewire('Profiles.Information')
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col">

                                            <div class="col-xl-24">

                                                <div class=" mb-4">
                                                    <div class="card-header">
                                                        {{ \App\Helpers\TranslationHelper::TranslateText('Sécurité') }}
                                                    </div>
                                                    <br>
                                                    <div class="">
                                                        @livewire('Profiles.UpdateProfile')
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>



                            <div class="tab-pane fade" id="nav-meet" role="tabpanel">
                                <div class="axil-dashboard-order">
                                    <p> {{ \App\Helpers\TranslationHelper::TranslateText('Mes Réunions') }}</p>
                                    <div class="table-responsive">
                                        <table class="table text-white font-bold">
                                            <thead>
                                                <tr>

                                                    <th scope="col">
                                                        {{ \App\Helpers\TranslationHelper::TranslateText('Le sujet') }}
                                                    </th>

                                                    <th scope="col">
                                                        {{ \App\Helpers\TranslationHelper::TranslateText('Type') }}
                                                    </th>


                                                    <th scope="col">
                                                        {{ \App\Helpers\TranslationHelper::TranslateText('Date/Heure debut') }}
                                                    </th>

                                                    <th scope="col">
                                                        {{ \App\Helpers\TranslationHelper::TranslateText('Code') }}
                                                    </th>


                                                    <th scope="col">Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($onlineClasses  as $key => $classe)
                                                    <tr>
                                                        <td data-label="Image">
                                                            {{ $classe->topic ?? ' Non défini' }}
                                                        </td>

                                                        <td>

                                                            @if ($classe->event_id && $classe->events)
                                                                <strong>
                                                                    {{ \App\Helpers\TranslationHelper::TranslateText('Type') }}


                                                                    :</strong>
                                                                {{ \App\Helpers\TranslationHelper::TranslateText('Evènement') }}
                                                                <br>
                                                                <strong>Nom :</strong>
                                                                {{ \App\Helpers\TranslationHelper::TranslateText($classe->event->titre ?? ' ') }}
                                                            @elseif ($classe->formation_id && $classe->formations)
                                                                <strong>
                                                                    {{ \App\Helpers\TranslationHelper::TranslateText('Type') }}
                                                                    :</strong>
                                                                {{ \App\Helpers\TranslationHelper::TranslateText('Formation') }}
                                                                <br>
                                                                <strong>
                                                                    {{ \App\Helpers\TranslationHelper::TranslateText('Nom') }}
                                                                    :</strong>
                                                                {{ \App\Helpers\TranslationHelper::TranslateText($classe->formations->titre) }}
                                                            @else
                                                                <strong>
                                                                    {{ \App\Helpers\TranslationHelper::TranslateText('Type') }}
                                                                    :</strong>
                                                                {{ \App\Helpers\TranslationHelper::TranslateText('Non défini') }}
                                                            @endif
                                                        </td>


                                                        <td data-label="price">

                                                            <strong>
                                                                {{ \App\Helpers\TranslationHelper::TranslateText('Début') }}
                                                                :</strong> {{ $classe->start_at }}<br>
                                                            <strong>
                                                                {{ \App\Helpers\TranslationHelper::TranslateText('Durée') }}
                                                                :</strong> {{ $classe->duration }}
                                                            {{ \App\Helpers\TranslationHelper::TranslateText('Heure(s)') }}
                                                            <br>
                                                        </td>


                                                        <td data-label="price">

                                                            {{ $classe->password }}
                                                        </td>


                                                        <td>
                                                            @if ($classe->status === 'ongoing')
                                                                <a href="{{ $classe->join_url }}" class="btn btn-primary"
                                                                    target="_blank">

                                                                    {{ \App\Helpers\TranslationHelper::TranslateText('Rejoindre la classe') }}
                                                                </a>
                                                            @elseif ($classe->status === 'pending')
                                                                <span class="text-warning">
                                                                    {{ \App\Helpers\TranslationHelper::TranslateText('Pas commencée') }}
                                                                </span>
                                                            @else
                                                                <span class="text-muted">

                                                                    {{ \App\Helpers\TranslationHelper::TranslateText('Terminée') }}
                                                                </span>
                                                            @endif
                                                        </td>



                                                        {{-- <td>

                                                            <a href="{{ $classe->join_url }}" class="btn btn-primary"
                                                                target="_blank">Rejoindre la classe</a>


                                                        </td>


 --}}

                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="6 ">

                                                            <div class="text-center p-5"><img width="50"
                                                                    height="50"
                                                                    src="https://img.icons8.com/?size=100&id=15867&format=png&color=000000"
                                                                    alt="shopping-cart--v1" />
                                                                <br>
                                                                <h5>

                                                                    {{ \App\Helpers\TranslationHelper::TranslateText('Pas de réunions enregistrées pour le moment') }}.
                                                                </h5>

                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforelse



                                            </tbody>
                                        </table>

                                        <div class="table-pagination">

                                            <nav class="shop-pagination">
                                                <ul class="pagination-list">
                                                    {{ $onlineClasses->links('pagination::bootstrap-4') }}
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).on('click', '.delete-comment', function(e) {
            e.preventDefault();
            let commentId = $(this).data('id');
            let row = $(this).closest('tr');

            Swal.fire({
                title: 'Êtes-vous sûr ?',
                text: "Cette action est irréversible.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Oui, supprimer !',
                cancelButtonText: 'Annuler'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '/deletecomments/' + commentId,
                        type: 'DELETE',
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            if (response.success) {
                                row.remove();

                                Swal.fire(
                                    'Supprimé !',
                                    response.message,
                                    'success'
                                );
                            }
                        },
                        error: function() {
                            Swal.fire(
                                'Erreur',
                                'Impossible de supprimer ce commentaire.',
                                'error'
                            );
                        }
                    });
                }
            });
        });
    </script>



    <x-footer2 />
    <x-mobileMenu />
    <x-searchPopup />
    <x-scroll-to-top />
@endsection
