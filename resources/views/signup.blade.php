<style>
    * {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
</style>
<form method="post">
    @csrf
    <div>
        <label>Name</label>
        <input type="text" name="name">
    </div>
    <div>
        <label>Age</label>
        <input type="text" name="age">
    </div>
    <div>
        <label>Date</label>
        <input type="date" name="date">
    </div>
    <div>
        <label>Phone</label>
        <input type="text" name="phone">
    </div>
    <div>
        <label>Website</label>
        <input type="text" name="web">
    </div>
    <div>
        <label>Address</label>
        <input type="text" name="address">
    </div>
    <button type="submit">OK</button>
    <!-- @include ('error') -->
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li style="color: red;">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</form>
<div>
    @if(isset($user))
    <p>Name: {{$user['name']}}</p>
    <p>Age: {{$user['age']}}</p>
    <p>Date: {{$user['date']}}</p>
    <p>Phone: {{$user['phone']}}</p>
    <p>Website: {{$user['web']}}</p>
    <p>Address: {{$user['address']}}</p>
    @endif
</div>