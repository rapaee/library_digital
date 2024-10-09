<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
   
</head>
<body>
    @extends('navbar_admin.nav_dashboard')
    @section('navbar_admin')
    <h1>admin</h1>
<form method="POST" action="{{ route('logout') }}" class=" block px-4 py-2 text-sm cursor-pointer hover:bg-gray-200 onclick="this.closest('form').submit();">
    @csrf
    <div class="" onclick="this.closest('form').submit();">
        <li>
            Logout
        </li>
    </div>
</form>
    @endsection
</body>
</html>