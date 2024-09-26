// 获取左侧选项列表
const items = document.querySelectorAll(".sidebar li");

// 为每个选项添加点击事件
items.forEach((item) => {
  item.addEventListener("click", function () {
    // 获取目标内容块的 ID
    const targetId = item.getAttribute("data-target");

    // 获取所有内容块，隐藏它们
    const contentBlocks = document.querySelectorAll("#content-area > div");
    contentBlocks.forEach((block) => {
      block.style.display = "none"; // 隐藏所有内容块
    });

    // 显示选中的内容块
    const activeBlock = document.getElementById(targetId);
    activeBlock.style.display = "block"; // 显示当前选中的内容块
  });
});
