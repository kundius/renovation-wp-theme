export function applyComparison(root) {
  const input = root.querySelector('input[type="range"]')

  input.addEventListener('input', () => {
    root.style.setProperty('--progress', `${input.value / 10}%`)
  })
}

export function initComparison() {
  const nodes = Array.from(document.querySelectorAll('[data-comparison]'))
  nodes.forEach(applyComparison)
}
