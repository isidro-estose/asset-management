    // JavaScript to handle the edit button click and populate the modal
    document.addEventListener('DOMContentLoaded', function() {
        const editButtons = document.querySelectorAll('.edtBtn');
        const editModal = document.getElementById('editVendorModal');

        editButtons.forEach(button => {
            button.addEventListener('click', function() {
                const vendorId = this.getAttribute('data-id');
                const vendorName = this.getAttribute('data-vendorName');
                const vendorContactPerson = this.getAttribute('data-vendorContactPerson');
                const vendorPhoneNumber = this.getAttribute('data-vendorPhoneNumber');
                const vendorEmail = this.getAttribute('data-vendorEmail');
                const vendorAddress = this.getAttribute('data-vendorAddress');

                // Populate the modal fields with the vendor data
                editModal.querySelector('form').action = `/vendor/${vendorId}/update`; // Update form action URL
                editModal.querySelector('#vendorName').value = vendorName;
                editModal.querySelector('#vendorContactPerson').value = vendorContactPerson;
                editModal.querySelector('#vendorPhoneNumber').value = vendorPhoneNumber;
                editModal.querySelector('#vendorEmail').value = vendorEmail;
                editModal.querySelector('#vendorAddress').value = vendorAddress;
            });
        });
    });