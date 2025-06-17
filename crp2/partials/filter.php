<div id="filter-bar">
    <select id="price-filter">
        <option value="0-1000000">Select Price Range</option>
        <option value="0-2000">₹200 - ₹2000</option>
        <option value="2000-5000">₹2000 - ₹5000</option>
        <option value="5000-50000000">₹5000 - ₹5000000</option>
        <!-- Add more options for different price ranges -->
    </select>
    <button onclick="filterCars()">Filter</button>
</div>


<script>

    function filterCars() {
        const priceFilter = document.getElementById('price-filter').value;
        const url = `http://localhost/crp2/list.php?price=${priceFilter}`;

        // Redirect to the filtered URL
        window.location.href = url;
    }



</script>