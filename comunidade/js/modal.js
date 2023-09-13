const modalOverlay = document.getElementById('overlay-modal-post');
const reportOverlay = document.getElementById('overlay-modal-report')
const userModalOverlay = document.getElementById('overlay-user-modal')

function openModal() {
  modalOverlay.style.display = "flex";
}

function closeModal() {
  modalOverlay.style.display = "none";
}

function openReportModal() {
  reportOverlay.style.display = 'flex'
}
function closeReportModal() {
  reportOverlay.style.display = 'none'
}

function openUserModal() {
  userModalOverlay.style.display = 'flex'
}
function closeUserModal() {
  userModalOverlay.style.display = 'none'
}

