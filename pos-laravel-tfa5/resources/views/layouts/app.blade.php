<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'POS System') | Laravel TFA5</title>
    <style>
        :root { font-family: Arial, sans-serif; color: #19243a; background: #f3f6fb; }
        * { box-sizing: border-box; }
        body { margin: 0; }
        header { background: #142744; color: white; padding: 20px 7%; display: flex; gap: 28px; align-items: center; flex-wrap: wrap; }
        header strong { font-size: 21px; }
        nav { display: flex; gap: 12px; flex-wrap: wrap; }
        nav a { color: #dce7fa; text-decoration: none; padding: 8px 12px; border-radius: 6px; }
        nav a:hover, nav a.active { background: #355b8e; color: white; }
        main { max-width: 1050px; margin: 42px auto; padding: 0 20px; }
        .panel { background: white; border: 1px solid #e2e8f0; border-radius: 12px; padding: 30px; box-shadow: 0 8px 24px #19243a0a; }
        h1 { margin-top: 0; font-size: 30px; }
        p { line-height: 1.65; color: #46546a; }
        .button { display: inline-block; margin-top: 12px; padding: 11px 16px; background: #245fa6; color: white; border-radius: 7px; text-decoration: none; }
        .table-wrap { overflow-x: auto; }
        table { width: 100%; border-collapse: collapse; margin-top: 22px; }
        th, td { padding: 14px 12px; text-align: left; border-bottom: 1px solid #e6ebf2; }
        th { background: #eff4fa; color: #263d5d; }
        .pill { display: inline-block; padding: 5px 10px; background: #e5f3e9; border-radius: 30px; font-size: 12px; }
        .inactive { background: #f9e8e8; }
        footer { text-align: center; padding: 20px; color: #718096; font-size: 13px; }
    </style>
</head>
<body>
    <header>
        <strong>POS Account System</strong>
        <nav aria-label="Main navigation">
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
            <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
            <a href="{{ route('customers.index') }}" class="{{ request()->routeIs('customers.index') ? 'active' : '' }}">Customers</a>
            <a href="{{ route('users.index') }}" class="{{ request()->routeIs('users.index') ? 'active' : '' }}">Users</a>
        </nav>
    </header>
    <main>@yield('content')</main>
    <footer>IT0049 - Web System Technologies | TFA5 | TC33</footer>
</body>
</html>
