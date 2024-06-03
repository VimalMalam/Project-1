document.addEventListener('DOMContentLoaded', () => {
    fetch('get_items.php')
        .then(response => response.json())
        .then(data => {
            const container = document.getElementById('items-container');
            data.items.forEach(item => {
                const itemDiv = document.createElement('div');
                itemDiv.classList.add('item');
                itemDiv.innerHTML = `
                    <h2>${item.name}</h2>
                    <p>${item.description}</p>
                    <p>Price: $${item.price} per day</p>
                    <button onclick="rentItem(${item.id})">Rent</button>
                `;
                container.appendChild(itemDiv);
            });
        });
});

function rentItem(id) {
    fetch(`rent_item.php?id=${id}`, { method: 'POST' })
        .then(response => response.json())
        .then(data => {
            alert(data.message);
        });
}
