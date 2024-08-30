document.addEventListener('DOMContentLoaded', () => {
    const profilePicInput = document.getElementById('profilePic');
    const previewImg = document.getElementById('previewImg');
    
    profilePicInput.addEventListener('change', (event) => {
        const file = event.target.files[0];
        
        if (file) {
            const reader = new FileReader();
            
            reader.onload = () => {
                previewImg.src = reader.result;
                previewImg.style.display = 'block';
            };
            
            reader.readAsDataURL(file);
        } else {
            previewImg.src = '';
            previewImg.style.display = 'none';
        }
    });
});