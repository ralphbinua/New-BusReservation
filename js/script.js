document.querySelectorAll('.faq-item h3').forEach(item => {
    item.addEventListener('click', () => {
        const faqItem = item.parentElement; // Get the parent .faq-item
        const paragraph = faqItem.querySelector('p'); // Get the paragraph within the clicked item

        // Collapse all other FAQ items
        document.querySelectorAll('.faq-item').forEach(otherItem => {
            if (otherItem !== faqItem) {
                otherItem.classList.remove('expanded');
                otherItem.querySelector('p').style.display = 'none'; // Hide other paragraphs
                otherItem.querySelector('i').classList.remove('fa-minus'); // Change icon to plus
                otherItem.querySelector('i').classList.add('fa-plus'); // Change icon to plus
            }
        });

        // Toggle the 'expanded' class on the clicked item
        faqItem.classList.toggle('expanded');

        // Check if the item is expanded and show/hide the paragraph accordingly
        if (faqItem.classList.contains('expanded')) {
            paragraph.style.display = 'block'; // Show the paragraph
            item.querySelector('i').classList.remove('fa-plus'); // Change icon to minus
            item.querySelector('i').classList.add('fa-minus'); // Change icon to minus
        } else {
            paragraph.style.display = 'none'; // Hide the paragraph
            item.querySelector('i').classList.remove('fa-minus'); // Change icon to plus
            item.querySelector('i').classList.add('fa-plus'); // Change icon to plus
        }
    });
});