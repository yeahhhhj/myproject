class Selector {
  constructor({ $app, updateAppCategory }) {
    this.$app = $app;
    this.selector = document.createElement('div');
    this.selector.className = "selector-wrapper";
    this.$app.appendChild(this.selector);


    this.updateAppCategory = updateAppCategory;

    this.categoryList = [
    ];
    this.selectedCategory = this.categoryList[0];

    this.selector.addEventListener('click', (e) => {
      console.log(e.target);
      if (e.target.className === 'category') {
        e.stopPropagation();
        const category = this.categoryList.find(category => {
          return category.code === e.target.id;
        });
        if (category) {
          this.selectedCategory = category;
          this.updateAppCategory(this.selectedCategory);
          this.render();
        }
      }
    })

    this.render();
  }

  render() {
    this.selector.innerHTML = `
      ${this.categoryList
        .map(category =>
          `
            <div
              id=${category.code}
              class="${this.selectedCategory.code === category.code
                  ? "category clicked"
                  : "category"}">
              ${category.ko}
            </div>
          `)
        .join("")
      }
    `
  }
}
