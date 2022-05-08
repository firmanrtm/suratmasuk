use Symfony\Component\Console\Helper\Table;

@extends('template');
@section('main')
<div id="opd">
    <h2>Data OPD</h2>
    @if(!empty($opd_list))
    <table class="table">
        <thead>
            <tr>
                <th>Nama OPD</th>
                <th>Instansi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($opd_list as $opd) : ?>
                <tr>
                    <td>{{ $opd->nama_opd }}</td>
                    <td>{{ $opd->instansi }}</td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    @else
    <p>Tidak ada data OPD</p>
    @endif
</div>
@endsection

@section('footer')
<div id="footer">
    <p>&copy; 2022 Aplikasi Surat Masuk</p>
</div>
@endsection