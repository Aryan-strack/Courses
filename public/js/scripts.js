document.addEventListener('DOMContentLoaded', function () {
    // Form validation for add and edit course forms
    const forms = document.querySelectorAll('#add-course-form, #edit-course-form');
    forms.forEach(form => {
        form.addEventListener('submit', function (event) {
            const title = form.querySelector('#title').value.trim();
            const instructor = form.querySelector('#instructor').value.trim();
            const creditHours = form.querySelector('#credit_hours').value;
            const semester = form.querySelector('#semester').value.trim();

            if (!title || !instructor || !semester) {
                alert('Please fill in all fields.');
                event.preventDefault();
                return;
            }

            if (isNaN(creditHours) || creditHours <= 0) {
                alert('Credit hours must be a positive number.');
                event.preventDefault();
                return;
            }
        });
    });

    // Delete course confirmation
    const deleteButtons = document.querySelectorAll('.delete-course');
    deleteButtons.forEach(button => {
        button.addEventListener('click', function (event) {
            event.preventDefault();
            const courseId = button.getAttribute('data-id');
            const courseTitle = button.closest('tr').querySelector('td').textContent;
            if (confirm(`Are you sure you want to delete the course "${courseTitle}"?`)) {
                window.location.href = button.getAttribute('href');
            }
        });
    });
});