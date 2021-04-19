<form action="includes/add_product.php" method="post">
    <label>
        <p>Название товара</p>
            <input type="text" name="product" placeholder="название товара" / ><br>
        <p>Категория товара</p>
            <select name="category">
                <option VALUE="Детские игрушки">Детские игрушки</option>
                <option VALUE="Взрослые игрушки">Взрослые игрушки</option>
            </select><br>
        <p>Цена товара</p>
            <input type="text" name="price" placeholder="цена товара" / ><br>
        <p>Описание товара</p>
            <textarea name="description" placeholder="внесите описание товара"></textarea><br>
            <button type="submit">Сохранить</button>
    </label>
</form>