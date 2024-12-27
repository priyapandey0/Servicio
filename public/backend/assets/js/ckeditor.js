ClassicEditor
    .create(document.querySelector('#editor'), {
        toolbar: {
            items: [
                'heading', 'bold', 'italic', 'link', 'bulletedList', 'numberedList',
                'blockQuote', 'insertTable', 'mediaEmbed', 'undo', 'redo',
                'comments', 'trackChanges', 'mathType',
                'fontFamily', 'fontSize', 'fontColor', 'highlight', 'alignment'
            ]
        },
        language: 'en',
        fontSize: {
            options: ['tiny', 'default', 'big', 'huge'] // Add options for font sizes
        },
        fontColor: {
            colors: [
                { color: '#000000', label: 'Black' },
                { color: '#ff0000', label: 'Red' },
                // Add more colors as needed
            ]
        },
        fontFamily: {
            options: [
                { title: 'Default', value: '' },
                { title: 'Arial', value: 'Arial, sans-serif' },
                { title: 'Courier New', value: '"Courier New", Courier, monospace' },
                { title: 'Georgia', value: 'Georgia, serif' },
                { title: 'Tahoma', value: 'Tahoma, sans-serif' }
            ]
        },
        highlight: {
            options: [
                { model: 'yellowMarker', class: 'marker-yellow', title: 'Yellow' },
                { model: 'greenMarker', class: 'marker-green', title: 'Green' },
                { model: 'pinkMarker', class: 'marker-pink', title: 'Pink' },
            ]
        },
        alignment: {
            options: ['left', 'center', 'right', 'justify']
        }   
    })
    .catch(error => {
        console.error(error);
    });
