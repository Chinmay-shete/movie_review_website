---
name: Cinematic Editorial
colors:
  surface: '#f9f9ff'
  surface-dim: '#d3daef'
  surface-bright: '#f9f9ff'
  surface-container-lowest: '#ffffff'
  surface-container-low: '#f1f3ff'
  surface-container: '#e9edff'
  surface-container-high: '#e1e8fd'
  surface-container-highest: '#dce2f7'
  on-surface: '#141b2b'
  on-surface-variant: '#474556'
  inverse-surface: '#293040'
  inverse-on-surface: '#edf0ff'
  outline: '#787588'
  outline-variant: '#c9c4d9'
  surface-tint: '#5937f2'
  primary: '#430cde'
  on-primary: '#ffffff'
  primary-container: '#5c3bf5'
  on-primary-container: '#dfd9ff'
  inverse-primary: '#c7bfff'
  secondary: '#855300'
  on-secondary: '#ffffff'
  secondary-container: '#fea619'
  on-secondary-container: '#684000'
  tertiary: '#812f00'
  on-tertiary: '#ffffff'
  tertiary-container: '#a84000'
  on-tertiary-container: '#ffd4c3'
  error: '#ba1a1a'
  on-error: '#ffffff'
  error-container: '#ffdad6'
  on-error-container: '#93000a'
  primary-fixed: '#e5deff'
  primary-fixed-dim: '#c7bfff'
  on-primary-fixed: '#180064'
  on-primary-fixed-variant: '#4000dc'
  secondary-fixed: '#ffddb8'
  secondary-fixed-dim: '#ffb95f'
  on-secondary-fixed: '#2a1700'
  on-secondary-fixed-variant: '#653e00'
  tertiary-fixed: '#ffdbcd'
  tertiary-fixed-dim: '#ffb596'
  on-tertiary-fixed: '#360f00'
  on-tertiary-fixed-variant: '#7d2d00'
  background: '#f9f9ff'
  on-background: '#141b2b'
  surface-variant: '#dce2f7'
  canvas-bg: '#EBEBF5'
  surface-white: '#FFFFFF'
  body-text: '#6B7280'
  star-rating: '#F59E0B'
typography:
  display-lg:
    fontFamily: DM Sans
    fontSize: 48px
    fontWeight: '700'
    lineHeight: 56px
    letterSpacing: -0.02em
  headline-lg:
    fontFamily: DM Sans
    fontSize: 32px
    fontWeight: '700'
    lineHeight: 40px
  headline-lg-mobile:
    fontFamily: DM Sans
    fontSize: 28px
    fontWeight: '700'
    lineHeight: 34px
  headline-md:
    fontFamily: DM Sans
    fontSize: 24px
    fontWeight: '600'
    lineHeight: 32px
  body-lg:
    fontFamily: Inter
    fontSize: 18px
    fontWeight: '400'
    lineHeight: 28px
  body-md:
    fontFamily: Inter
    fontSize: 16px
    fontWeight: '400'
    lineHeight: 24px
  label-md:
    fontFamily: Inter
    fontSize: 14px
    fontWeight: '600'
    lineHeight: 20px
    letterSpacing: 0.05em
rounded:
  sm: 0.25rem
  DEFAULT: 0.5rem
  md: 0.75rem
  lg: 1rem
  xl: 1.5rem
  full: 9999px
spacing:
  container-padding: 32px
  section-gap: 40px
  gutter: 24px
  margin-mobile: 16px
  margin-desktop: auto
---

## Brand & Style
The brand personality is authoritative yet accessible, positioned as a premium destination for film criticism and industry insights. It balances the sophistication of a high-end print magazine with the fluidity of a modern digital platform.

The design style is **Corporate / Modern** with a focus on **Minimalism**. It prioritizes high-legibility typography, generous whitespace (breathing room), and a clear visual hierarchy. By using a "Canvas and Card" approach, the interface creates a distinct sense of depth and focus, guiding the user toward the content without unnecessary visual noise.

## Colors
This design system utilizes a sophisticated palette centered around a vibrant **Deep Purple** primary color, which provides a sense of premium energy. The **Golden Yellow** is reserved strictly for functional accents, such as star ratings and highlight badges, ensuring they pop against the neutral background.

The background uses a soft, off-white **Canvas** (#EBEBF5) to reduce eye strain, while the primary content resides on **White** cards to create a clear structural distinction. Text contrast is strictly managed: near-black for headings to ensure authority, and a balanced gray for body text to maintain a comfortable reading pace.

## Typography
The typography strategy employs a dual-sans-serif approach to maximize both character and readability. **DM Sans** is used for headings to provide a geometric, modern editorial feel. **Inter** is used for all body and UI text due to its exceptional legibility and systematic performance.

Headlines should always use the "Near-Black" (#111827) token. For long-form editorial content, `body-lg` is preferred to mimic the feel of a physical magazine. Labels and metadata should use slightly increased letter spacing and a semi-bold weight to differentiate them from standard prose.

## Layout & Spacing
The layout follows a **Fixed Grid** philosophy for desktop to maintain the editorial "column" feel, centered within the viewport. 

- **Internal Padding:** Cards and content blocks must use a consistent 32px internal padding to ensure elements do not feel cramped.
- **Section Spacing:** A 40px vertical gap is used between major layout blocks (e.g., Hero to Grid) to provide clear visual separation.
- **Responsive Behavior:** On mobile, margins reduce to 16px, and 3-column grids reflow to a single stack. Horizontal swiping "carousels" are preferred for movie posters on smaller screens to conserve vertical space.

## Elevation & Depth
Depth is communicated through **Tonal Layers** supplemented by **Ambient Shadows**. 

The "Canvas" (#EBEBF5) serves as the lowest level. Content cards sit on the next level up, colored pure white. These cards feature a very soft, highly diffused shadow (e.g., 0px 4px 20px rgba(0, 0, 0, 0.05)) to create a subtle "lift" without looking heavy. Interactive elements like buttons do not use shadows; they rely on color fills to indicate state, maintaining a clean, flat-modern aesthetic.

## Shapes
The shape language is defined by "Soft-Geometric" forms. Large containers and content cards utilize a **20px (1.25rem)** corner radius to evoke a premium, friendly feel. 

Smaller UI components like input fields and selection chips follow the `rounded-lg` (1rem) standard. Buttons are the exception, utilizing a full **Pill-shape** to make them clearly identifiable as the primary interactive elements within the structured card layouts.

## Components
- **Buttons:** All primary actions use a pill-shaped, solid Deep Purple (#5C3BF5) fill with white text. Secondary actions should use an outline version with the same radius.
- **Cards:** The core component of the design. Must have a 20px radius, white background, and 32px internal padding. No borders should be used; depth is created via shadow only.
- **Star Ratings:** Use the Golden Yellow (#F59E0B) for active stars. For empty stars, use a light gray stroke.
- **Input Fields:** Soft-rounded (1rem) with a subtle light gray border that thickens and changes to primary purple on focus.
- **Chips/Badges:** Small, pill-shaped labels for genres or tags. Use a light tint of the primary color (low opacity purple) with dark purple text for a sophisticated look.
- **Lists:** Editorial lists should feature generous vertical padding (16px+) and subtle dividers in a very light gray to prevent visual clutter.