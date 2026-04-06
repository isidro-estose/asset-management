    // JavaScript to handle the edit button click and populate the modal
    document.addEventListener('DOMContentLoaded', function() {
        const editButtons = document.querySelectorAll('.edtBtn');
        const editModal = document.getElementById('editCategoryModal');

        editButtons.forEach(button => {
            button.addEventListener('click', function() {
                const categoryId = this.getAttribute('data-id');
                const categoryName = this.getAttribute('data-categoryName');
                const categoryDescription = this.getAttribute('data-categoryDescription');

                // Populate the modal fields with the category data
                editModal.querySelector('form').action = `category/${categoryId}/update`; // Update form action URL
                editModal.querySelector('#categoryName').value = categoryName;
                editModal.querySelector('#categoryDescription').value = categoryDescription;
            });
        });
    });