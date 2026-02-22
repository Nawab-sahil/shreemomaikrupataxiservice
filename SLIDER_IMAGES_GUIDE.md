# Modern Split-Screen Slider - Images Guide

## New Professional Design 🎨

The slider now features a **modern split-screen layout** built entirely with **Tailwind CSS**:
- **Left Side**: Content (headings, text, CTA buttons)
- **Right Side**: Beautiful, prominent images
- **Responsive**: Stacks vertically on mobile devices
- **Professional**: Glass-morphism, gradients, smooth transitions

---

## Images Required for the Slider

Place these 3 images in the `public/images/` directory:

### 1. **taxi-city.jpg** (General Taxi Service - Slide 1)
- **Recommended size**: 1200x800px or larger
- **Aspect ratio**: 3:2 or 16:9
- **Description**: Modern taxi in city environment
- **Example**: Clean yellow taxi on urban street, professional daytime photo
- **Focus**: Right half of image will be prominently displayed

### 2. **airport-transfer.jpg** (Airport Service - Slide 2)
- **Recommended size**: 1200x800px or larger
- **Aspect ratio**: 3:2 or 16:9
- **Description**: Premium car at airport or modern terminal
- **Example**: Luxury sedan near airport entrance, airplane in background
- **Focus**: Right half of image will be prominently displayed

### 3. **city-tour.jpg** (Gujarat Tours - Slide 3)
- **Recommended size**: 1200x800px or larger
- **Aspect ratio**: 3:2 or 16:9
- **Description**: Famous Gujarat landmarks or scenic views
- **Example**: Somnath Temple, Dwarka, Gir Forest, Statue of Unity
- **Focus**: Right half of image will be prominently displayed

---

## Image Guidelines for Split-Screen Design

- **Format**: JPG, PNG, or WebP
- **Resolution**: 1200x800px minimum (higher for Retina displays)
- **File Size**: Keep under 300KB each (optimize for web)
- **Quality**: High quality, professional photography
- **Composition**: Important subjects should be on the **right side** of the image
- **Lighting**: Well-lit, not too dark (subtle overlay will be applied)

---

## Where to Place Images

```
public/
  images/
    taxi-city.jpg
    airport-transfer.jpg
    city-tour.jpg
```

---

## Fallback Images

If custom images are not added, the slider automatically uses professional Unsplash fallbacks:
- **Slide 1**: Modern city landscape
- **Slide 2**: Airport with airplane
- **Slide 3**: World map with location pins

---

## Free Stock Photo Sources

Professional taxi and travel images:
- **Unsplash.com** - High-quality, free photos
- **Pexels.com** - Commercial-use images
- **Pixabay.com** - Free stock photos

**Search terms**: "taxi service", "airport transfer", "luxury car", "Gujarat tourism", "professional driver"

## Current Image Paths in Code

The slider is configured to use:
1. `{{ asset('images/taxi-city.jpg') }}`
2. `{{ asset('images/airport-transfer.jpg') }}`
3. `{{ asset('images/city-tour.jpg') }}`

## Testing Without Images

If images are not available yet, the slider will show:
- Dark background with gradient overlay
- Text content will still be visible and readable
- All functionality will work normally

---

**Note**: Once you add the images, clear your browser cache to see them immediately.
