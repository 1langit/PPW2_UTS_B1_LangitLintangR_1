<!DOCTYPE html>
<html lang="en">
<head>
    @extends('meta')
    <title>Data Pemain</title>
</head>
<body>
    <div class="container">
        @yield('title')
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                @yield('head')
            </thead>
            <tbody>
                @yield('body')
            </tbody>
        </table>
    </div>
</body>
</html>