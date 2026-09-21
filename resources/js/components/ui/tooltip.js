export default () => ({
    openTooltip: false,
    closingTooltip: false,
    show() {
        this.openTooltip = true;
    },
    hide() {
        this.openTooltip = false;
    },
});
