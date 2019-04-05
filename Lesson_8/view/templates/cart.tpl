<div class="cart">
    <h3>Корзина: {user}</h3>
    <table>
        <tr>
            <th>№</th>
            <th>Товар</th>
            <th>Количество</th>
            <th>Цена</th>
        </tr>
        {goodItems}
        <tr>
            <td colspan="3">Всего:</td>
            <td>{totalSum}р.</td>
        </tr>
    </table>
    <a href="./commitOrder.php" class="order-us">Оформить</a>
</div>
