// Khi click vào ảnh bất kỳ
document.querySelectorAll("img").forEach(img => {
    img.addEventListener("click", function () {
        const modal = document.getElementById("imagePreviewModal");
        const modalImage = document.getElementById("previewImage");

        modalImage.src = this.src;
        modal.classList.remove("hidden");
        modal.classList.add("flex");
    });
});

// Đóng modal
function closePreview() {
    const modal = document.getElementById("imagePreviewModal");
    modal.classList.add("hidden");
    modal.classList.remove("flex");
}

// Bấm ra ngoài ảnh để đóng
document.getElementById("imagePreviewModal").addEventListener("click", function (e) {
    if (e.target === this) closePreview();
});

