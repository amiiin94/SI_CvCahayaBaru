@extends('layouts.tabler')

@section('content')
<div class="page-body">
    @if(!$purchases)
    <x-empty
        title="Pembelian tidak ditemukan"
        message="Try adjusting your search or filter to find what you're looking for."
        button_label="{{ __('Tambah pembelian bahan pertama') }}"
        button_route="{{ route('purchases.create') }}"
    />
    @else
    <div class="container-xl">
        @livewire('tables.purchase-table')
    @endif
</div>
@endsection
