---
name: Release
about: Checklist to ensure release tasks are completed
title: 'Release: Version x.x.x'
labels: ''
assignees: ''

---

**Update version**
- [ ] style.css
- [ ] package.json
- [ ] .pot file (`npm install` then `npm run makepot`)
- [ ] Changelog (include changes)

**Check standards**
- [ ] Lint PHP (`composer install` then `composer phpcs`)
- [ ] Lint JS (`npm install` then `npm run lint:js`)
- [ ] Lint CSS (`npm install` then `npm run lint:css`)
- [ ] Autoprefix CSS `npm run autoprefixer`

**Final release**
- [ ] PR to merge Develop to Master
- [ ] Create zip from Master (`npm run zip`)
- [ ] Tag release and include zip
