<div>
    <form action="{{route("payment")}}" method="post">
        @csrf
        <label for="month"> نوع حساب </label>
        <select name="month" id="month">
            <option value="1">
                - هزار تومان {{$tar[0]["price"]->price}}یک ماهه  -
            </option>
            <option value="3">
                - هزار تومان {{$tar[0]["price"]->price}} سه ماهه -
            </option>
            <option value="6">
                - هزار تومان {{$tar[0]["price"]->price}}شش ماهه -
            </option>
            <option value="9">
                 نه ماهه
            </option>
            <option value="12">
                یک ساله
            </option>
        </select>
        <label for="addOnMember">تعداد اکانت های اضافه</label>
        <input type="text" name="addOnMember" id="addOnMember"/>
        <button type="submit">خرید اشتراک یک ماهه</button>
    </form>
</div>
