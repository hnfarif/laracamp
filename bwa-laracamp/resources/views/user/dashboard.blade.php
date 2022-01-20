@extends('layouts.app')
@section('content')
@include('layouts.navbar')
<section class="dashboard my-5">
    <div class="container">
        <div class="row text-left">
            <div class=" col-lg-12 col-12 mt-6">
                <p class="story">
                    DASHBOARD
                </p>
                <h2 class="primary-header ">
                    My Bootcamps
                </h2>
            </div>
        </div>
        <div class="row my-5">
            @include('components.alert')
            <table class="table">
                <tbody>
                    @foreach ($checkout as $row)
                    <tr class="align-middle">
                        <td width="18%">
                            <img src="{{ asset('/images/item_bootcamp.png') }}" height="120" alt="">
                        </td>
                        <td>
                            <p class="mb-2">
                                <strong>{{ $row->Camp->title }}</strong>
                            </p>
                            <p>
                                {{ $row->created_at->format('M d, Y') }}
                            </p>
                        </td>
                        <td>
                            <strong>${{ $row->Camp->price }}</strong>
                        </td>
                        <td>
                            @if($row->is_paid)
                            <strong class="text-success">Payment Succesful</strong>
                            @else
                            <strong class="text-yellow">Waiting for payment</strong>
                            @endif
                        </td>
                        <td>
                            <a href="https://wa.me/+62895320365511?text=Hi, Saya {{ auth()->user()->name }} ingin bertanya mengenai kelas {{ $row->Camp->title }}"
                                class="btn btn-primary" target="_blank">
                                Contact Support
                            </a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection
