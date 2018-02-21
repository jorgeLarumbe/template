@extends('admin.layout')

@section('content')

@include('admin.partials.header-content')

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="{{ asset('css/dataTableResponsive/dataTablesBootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dataTableResponsive/dataTablesResponsive.css') }}">

    <!-- DataTables JS -->
    <script src="{{ asset('js/dataTableResponsive/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/dataTableResponsive/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/dataTableResponsive/dataTables.responsive.js') }}"></script>


    <div class="panel panel-default">
        <div class="panel-heading">. : : Table User Example : : .</div>
        <div class="panel-body">

            <table width="100%" class="table table-striped table-bordered table-hover left" id="dataTables-example">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Avatar</th>
                        <th>Name</th>
                        <th>eMail</th>
                        <th>Registro</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>webmaster.png</td>
                        <td>Webmaster</td>
                        <td>webmaster@gmail.com</td>
                        <td>1 day ago</td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>admin.png</td>
                        <td>admin</td>
                        <td>admin@gmail.com</td>
                        <td>1 day ago</td>
                    </tr>
                </tbody>
            </table>    

        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">. : : Source Code : : .</div>
        <div class="panel-body">

<figure class=highlight><pre>
    <code class=language-html data-lang=html>

    <label>CSS Require</label>
    <span class=nt>&lt;!-- DataTables CSS --&gt;
    <a href="{{ asset('css/dataTableResponsive/dataTablesBootstrap.css') }}" target="_blank"><span class=nt>&lt;link rel="stylesheet" href="@{{ asset('css/dataTableResponsive/dataTablesBootstrap.css') }}"&gt;</a>
    <a href="{{ asset('css/dataTableResponsive/dataTablesResponsive.css') }}" target="_blank"><span class=nt>&lt;link rel="stylesheet" href="@{{ asset('css/dataTableResponsive/dataTablesResponsive.css') }}"&gt;</a>

    <label>JS Require</label>
    <span class=nt>&lt;!-- DataTables JS --&gt;
    <a href="{{ asset('js/dataTableResponsive/jquery.dataTables.min.js') }}" target="_blank"><span class=nt>&lt;script src="@{{ asset('js/dataTableResponsive/jquery.dataTables.min.js') }}"&gt;<span class=nt>&lt;/script&gt;</a>
    <a href="{{ asset('js/dataTableResponsive/dataTables.bootstrap.min.js') }}" target="_blank"><span class=nt>&lt;script src="@{{ asset('js/dataTableResponsive/dataTables.bootstrap.min.js') }}"&gt;<span class=nt>&lt;/script&gt;</a>
    <a href="{{ asset('js/dataTableResponsive/dataTables.responsive.js') }}" target="_blank"><span class=nt>&lt;script src="@{{ asset('js/dataTableResponsive/dataTables.responsive.js') }}"&gt;<span class=nt>&lt;/script&gt;</a>

    <span class=nt>&lt;table width="100%" class="table table-striped table-bordered table-hover left" id="dataTables-example"&gt;
        <span class=nt>&lt;thead&gt;
            <span class=nt>&lt;tr&gt;
                <span class=nt>&lt;th>ID<span class=nt>&lt;/th&gt;
                <span class=nt>&lt;th>Avatar<span class=nt>&lt;/th&gt;
                <span class=nt>&lt;th>Name<span class=nt>&lt;/th&gt;
                <span class=nt>&lt;th>eMail<span class=nt>&lt;/th&gt;
                <span class=nt>&lt;th>Registro<span class=nt>&lt;/th&gt;
            <span class=nt>&lt;/tr&gt;
        <span class=nt>&lt;/thead&gt;
        <span class=nt>&lt;tbody&gt;
            <span class=nt>&lt;tr&gt;
                <span class=nt>&lt;td>01<span class=nt>&lt;/td&gt;
                <span class=nt>&lt;td>webmaster.png<span class=nt>&lt;/td&gt;
                <span class=nt>&lt;td>Webmaster<span class=nt>&lt;/td&gt;
                <span class=nt>&lt;td>webmaster@gmail.com<span class=nt>&lt;/td&gt;
                <span class=nt>&lt;td>1 day ago<span class=nt>&lt;/td>
            <span class=nt>&lt;/tr&gt;
            <span class=nt>&lt;tr&gt;
                <span class=nt>&lt;td>02<span class=nt>&lt;/td&gt;
                <span class=nt>&lt;td>admin.png<span class=nt>&lt;/td&gt;
                <span class=nt>&lt;td>admin<span class=nt>&lt;/td&gt;
                <span class=nt>&lt;td>admin@gmail.com<span class=nt>&lt;/td&gt;
                <span class=nt>&lt;td>1 day ago<span class=nt>&lt;/td&gt;
            <span class=nt>&lt;/tr&gt;
        <span class=nt>&lt;/tbody&gt;
    <span class=nt>&lt;/table&gt;

    <span class=nt>&lt;!-- Page-Level Demo Scripts - Tables - Use for reference --&gt;
    <span class=nt>&lt;script&gt;
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    <span class=nt>&lt;/script&gt;

    </code></pre>
</figure>       
            
        </div>
    </div>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

@endsection

