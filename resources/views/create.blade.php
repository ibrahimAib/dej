
<div class="container">
    <div class="d-flex justify-content-center ">
        <form action="/gallery" method="POST" enctype="multipart/form-data">
            @csrf
        <textarea name="comption" class="form-control mt-2" cols="30" rows="10"></textarea>
        <button type="submit" class="btn btn-dark mt-1">send</button>
        <select name="line" id="">
            <option value="1">طولي</option>
            <option value="2">عرضي</option>
        </select>
        <select name="sec" id="">
            <option value="food">FOOD</option>
            <option value="drink">DRINK</option>
        </select>
        </form>
    </div>
</div>