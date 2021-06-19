document.querySelectorAll(".item img").forEach((img) => {
  // Ideally, we would know the image size or aspect ratio beforehand...
  if (img.naturalHeight) {
    setItemRatio.call(img);
  } else {
    img.addEventListener("load", setItemRatio);
  }
});

function setItemRatio() {
  this.parentNode.style.setProperty(
    "--ratio",
    this.naturalHeight / this.naturalWidth
  );
}
