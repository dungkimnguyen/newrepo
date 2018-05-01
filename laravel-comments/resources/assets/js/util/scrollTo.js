import MoveTo from 'moveto'

const moveto = new MoveTo()

/**
 * Scroll from current position to the anchor point.
 *
 * @param {HTMLElement|Number} target
 * @param {Number} duration
 */
export default function scrollTo (target, duration = 200) {
  moveto.move(target, { duration })
}
