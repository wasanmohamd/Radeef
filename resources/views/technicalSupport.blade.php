@extends('layout')

@section('title', 'Technical Support')

@section('content')

<style>
/* 
        .container {
            width: 80%;
            margin: 30px auto;
            padding: 20px;
            border-radius: 8px;
 } */

h1 {
    color: #a0527a;
    text-align: center;
    margin-bottom: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
    color: #333;
    table-layout: fixed;
}

table,
th,
td {
    border: 1px solid #ddd;
}

th,
td {
    padding: 12px;
    text-align: left;
    color: #333;
    word-wrap: break-word;
}

th {
    background-color: #f2f2f2;
}

tr:nth-child(even) {
    background-color: #f9f9f9;
}

.btn-export,
.btn-email {
    display: inline-block;
    padding: 8px 7px;
    margin-top: 20px;
    background-color: #a0527a;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
    cursor: pointer;
}

.btn-export:hover,
.btn-email:hover {
    background-color: #8d3d5e;
}

.btn-export {
    margin-left: 10px;
}

.pagination {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

.pagination a,
.pagination span {
    color: #a0527a;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color 0.3s;
    border: 1px solid #ddd;
    margin: 0 4px;
    border-radius: 4px;
}

.pagination a:hover {
    background-color: #ddd;
}

.pagination .active {
    background-color: #a0527a;
    color: white;
    border: 1px solid #a0527a;
}

.pagination .disabled {
    color: #ccc;
    pointer-events: none;
}
</style>



<div class="row justify-content-center" style="margin-top: 140px">
    <h1>Technical Support Inquiries</h1>
<div class="col-md-8">
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Ticket</th>
                <th>Inquiry</th>
                <th>Created At</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($inquiries as $inquiry)
            <tr>
                <td>{{ $inquiry->name }}</td>
                <td>{{ $inquiry->email }}</td>
                <td>{{ $inquiry->ticket }}</td>
                <td>{{ $inquiry->inquiry }}</td>
                <td>{{ $inquiry->created_at->format('Y-m-d H:i:s') }}</td>
                <td>
                    @if ($inquiry->status == 0)
                    open
                    @else
                    close
                    @endif

                </td>
                <td>
                    <a href="{{ route('writingpage.email', $inquiry->id) }}" class="btn-email">Send Email</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination links -->
    <div class="pagination">

        {{$inquiries->links("pagination::bootstrap-4")}}

    </div>
    </div>
</div>
@endsection