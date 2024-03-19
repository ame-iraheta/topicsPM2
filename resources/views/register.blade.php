<div>
    <!-- An unexamined life is not worth living. - Socrates -->

    <form action="/register" method="post">
        @csrf

    <div>
        <label for="">Name</label>
        <input type="text" name="name">
    </div>

    <div>
        <label for="">Email</label>
        <input type="text" name="email">
    </div>

    <div>
        <label for="">Password</label>
        <input type="password" name="password">
    </div>

    <div>
        <label for="">Birthday</label>
        <input type="date" name="birthday">
    </div>

        <button type="submit">Send</button>
    </form>
</div>

