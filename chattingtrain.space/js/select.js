// Select Script

const select = document.querySelector('.select');
const selectValue = document.querySelector('.select_value');
const selectDropdown = document.querySelector('.select_dropdown');
const tagResult = document.querySelector('.tag_result')

selectDropdown.addEventListener('click', e => {
  const option = e.target.closest('.select_option');
  if (option) {
    selectValue.textContent = option.textContent;
    e.target.closest('.select').blur()
    select.dispatchEvent(new CustomEvent('change', {
      detail: option.textContent
    }))
  }
})


select.addEventListener('change', e => tagResult.textContent = e.detail)
