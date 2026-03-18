    // JavaScript to handle the edit button click and populate the modal
    document.addEventListener('DOMContentLoaded', function() {
        const editButtons = document.querySelectorAll('.edtBtn');
        const editModal = document.getElementById('editEmployeeModal');

        editButtons.forEach(button => {
            button.addEventListener('click', function() {
                const employeeId = this.getAttribute('data-id');
                const empId = this.getAttribute('data-empId');
                const empFname = this.getAttribute('data-empFname');
                const empLname = this.getAttribute('data-empLname');
                const empPosition = this.getAttribute('data-empPosition');
                const empDept = this.getAttribute('data-empDept');
                const empHireDate = this.getAttribute('data-empHireDate');
                const emp_status = this.getAttribute('data-empStatus');

                // Populate the modal fields with the employee data
                editModal.querySelector('form').action = `/partials/${employeeId}/update`; // Update form action URL
                editModal.querySelector('#empId').value = empId;
                editModal.querySelector('#empFname').value = empFname;
                editModal.querySelector('#empLname').value = empLname;
                editModal.querySelector('#empPosition').value = empPosition;
                editModal.querySelector('#empDeptId').value = empDept;
                editModal.querySelector('#empHireDate').value = empHireDate;
                editModal.querySelector('#emp_status').value = emp_status;
            });
        });
    });