# 习题6
## 4.
>[!note] 
>设总体$\boldsymbol{X}\sim N_{p}(\boldsymbol{\mu},\mathbf{\Sigma})$,其中$\boldsymbol{\mu}=(\mu_{1},\cdots,\mu_{p})^{\prime}$和$\mathbf{\Sigma}>0$.假设$\boldsymbol{x}_{1},\cdots,\boldsymbol{x}_{n}$为来自$p$元正态总体$\boldsymbol{X}$的一组独立同分布的简单随机样本,且$n>p$.记$\mathbf{C}$为$k\times p$的常数矩阵和$\boldsymbol{r}$为已知的$k$维向量,且要求$k<q$和$\mathrm{rank}(\mathbf{C})=k$.试给出检验$H_{0}:\mathbf{C}\boldsymbol{\mu}=\boldsymbol{r}$的检验统计量及其分布.

$$
\begin{equation} \begin{aligned}
Sol&.考虑似然比统计量\lambda=\frac{\sup\limits_{\mathbf{C}\boldsymbol{\mu}=\boldsymbol{r}}f(\boldsymbol{x_{1}},\cdots,\boldsymbol{x_{n}})}{\sup\limits_\boldsymbol{\mu}f(\boldsymbol{x_{1}},\cdots,\boldsymbol{x_{n}})},
\\&
其中f(\boldsymbol{x_{1}},\cdots,\boldsymbol{x_{n}})=\frac{1}{(2\pi)^{np/2}\lvert\mathbf{\Sigma}\rvert^{n/2}}\mathrm{etr}\left\{-\frac{1}{2}\mathbf{\Sigma}^{-1}\left(\sum^{n}_{i=1}(\boldsymbol{x}_{i}-\boldsymbol{\mu})(\boldsymbol{x}_{i}-\boldsymbol{\mu})^{\prime}\right)\right\}
\\&
=\frac{1}{(2\pi)^{np/2}\lvert\mathbf{\Sigma}\rvert^{n/2}}\mathrm{etr}\left\{-\frac{1}{2}\mathbf{\Sigma}^{-1}(\mathbf{V}+n(\overline{\boldsymbol{x}}-\boldsymbol{\mu})(\overline{\boldsymbol{x}}-\boldsymbol{\mu})^{\prime})\right\},\mathbf{V}为样本离差阵,
\\&
即\mathbf{V}=\sum^{n}_{i=1}(\boldsymbol{x}_{i}-\overline{\boldsymbol{x}})(\boldsymbol{x}_{i}-\overline{\boldsymbol{x}})^{\prime}.
已知\widehat{\boldsymbol{\mu}}_{\mathrm{MLE}}=\overline{\boldsymbol{x}},\widehat{\mathbf{\Sigma}}_{\mathrm{MLE}}=\frac{\mathbf{V}}{n},
则\sup\limits_\boldsymbol{\mu}f(\boldsymbol{x_{1}},\cdots,\boldsymbol{x_{n}})=\frac{1}{\left(\frac{2\mathrm{e}\pi}{n}\right)^{\frac{np}{2}}\lvert\mathbf{V}\rvert^{\frac{n}{2}}}.
\\&
要使\sup\limits_{\mathbf{C}\boldsymbol{\mu}=\boldsymbol{r}}f(\boldsymbol{x_{1}},\cdots,\boldsymbol{x_{n}})最小,考虑\ln f^{\prime}=-n\ln\lvert\mathbf{\Sigma}\rvert-\mathrm{tr}\left({\mathbf{\Sigma}}^{-1}(\mathbf{V}+n(\overline{\boldsymbol{x}}-\boldsymbol{\mu})(\overline{\boldsymbol{x}}-\boldsymbol{\mu})^{\prime})\right)
\\&
\frac{\partial\ln f^{\prime}}{\partial\mathbf{\Sigma}}=-n\mathbf{\Sigma}^{-1}+\mathbf{\Sigma}^{-2}(\mathbf{V}+n(\overline{\boldsymbol{x}}-\boldsymbol{\mu})(\overline{\boldsymbol{x}}-\boldsymbol{\mu})^{\prime})=0,
则\widehat{\mathbf{\Sigma}}=\frac{1}{n}\left(\mathbf{V}+n(\overline{\boldsymbol{x}}-\boldsymbol{\mu})(\overline{\boldsymbol{x}}-\boldsymbol{\mu})^{\prime}\right),
\\&
\sup\limits_{\mathbf{C}\boldsymbol{\mu}=\boldsymbol{r}}f(\boldsymbol{x_{1}},\cdots,\boldsymbol{x_{n}})=\sup\limits_{\mathbf{C}\boldsymbol{\mu}=\boldsymbol{r}}\frac{1}{\left(\frac{2\mathrm{e}\pi}{n}\right)^{\frac{np}{2}}\lvert(\mathbf{V}+n(\overline{\boldsymbol{x}}-\boldsymbol{\mu})(\overline{\boldsymbol{x}}-\boldsymbol{\mu})^{\prime})\rvert^{\frac{n}{2}}}
\\&
\lambda=\sup\limits_{\mathbf{C}\boldsymbol{\mu}=\boldsymbol{r}}\frac{\lvert\mathbf{V}\rvert^{\frac{n}{2}}}{\lvert(\mathbf{V}+n(\overline{\boldsymbol{x}}-\boldsymbol{\mu})(\overline{\boldsymbol{x}}-\boldsymbol{\mu})^{\prime})\rvert^{\frac{n}{2}}}=\sup\limits_{\mathbf{C}\boldsymbol{\mu}=\boldsymbol{r}}\frac{1}{\lvert\mathbf{I}_{p}+n\mathbf{V}^{-1}(\overline{\boldsymbol{x}}-\boldsymbol{\mu})(\overline{\boldsymbol{x}}-\boldsymbol{\mu})^{\prime})\rvert^{\frac{n}{2}}}
\\&
=\sup\limits_{\mathbf{C}\boldsymbol{\mu}=\boldsymbol{r}}\left(1+n(\overline{\boldsymbol{x}}-\boldsymbol{\mu})^{\prime}\mathbf{V}^{-1}(\overline{\boldsymbol{x}}-\boldsymbol{\mu})\right)^{-\frac{n}{2}},等价于求
\inf\limits_{\mathbf{C}\boldsymbol{\mu}=\boldsymbol{r}}(\overline{\boldsymbol{x}}-\boldsymbol{\mu})^{\prime}\mathbf{V}^{-1}(\overline{\boldsymbol{x}}-\boldsymbol{\mu})即可.
\\&
令L=(\overline{\boldsymbol{x}}-\boldsymbol{\mu})^{\prime}\mathbf{V}^{-1}(\overline{\boldsymbol{x}}-\boldsymbol{\mu})-\boldsymbol{t}^{\prime}(\mathbf{C}\boldsymbol{\mu}-\boldsymbol{r}),
\\&
\left\{ \begin{array}{rcl}\frac{\partial L}{\partial\boldsymbol{t}}=\mathbf{C}\boldsymbol{\mu}-\boldsymbol{r}=0\\\frac{\partial L}{\partial\boldsymbol{\boldsymbol{\mu}}}=-2\mathbf{V}^{-1}(\overline{\boldsymbol{x}}-\boldsymbol{\mu})-\mathbf{C}^{\prime}\boldsymbol{t}=0\end{array}\right.,\quad解得\left\{ \begin{array}{rcl}\boldsymbol{t}=2(\mathbf{CVC}^{\prime})^{-1}(\boldsymbol{r}-\mathbf{C}\overline{\boldsymbol{x}})\\\widehat{\boldsymbol{\mu}}=\overline{\boldsymbol{x}}+\mathbf{VC}^{\prime}(\mathbf{CVC}^{\prime})^{-1}(\boldsymbol{r}-\mathbf{C}\overline{\boldsymbol{x}})\end{array}\right.
\\&
故\lambda=\left(1+n(\boldsymbol{r}-\mathbf{C}\overline{\boldsymbol{x}})^{\prime}(\mathbf{CVC}^{\prime})^{-1}\mathbf{CV}\cdot\mathbf{V}^{-1}\cdot\mathbf{VC}^{\prime}(\mathbf{CVC}^{\prime})^{-1}(\boldsymbol{r}-\mathbf{C}\overline{\boldsymbol{x}})\right)^{-\frac{n}{2}}
\\&
=\left(1+n(\mathbf{C}\overline{\boldsymbol{x}}-\boldsymbol{r})^{\prime}(\mathbf{CVC}^{\prime})^{-1}(\mathbf{C}\overline{\boldsymbol{x}}-\boldsymbol{r})\right)^{-\frac{n}{2}}
\\&
已知\overline{\boldsymbol{x}}\sim N_{p}(\boldsymbol{\mu},\mathbf{\Sigma}/n),\mathbf{V}\sim W_{p}(n-1,\mathbf{\Sigma}),则\sqrt{n}(\mathbf{C}\overline{\boldsymbol{x}}-\boldsymbol{r})\sim N_{p}(\sqrt{n}(\mathbf{C}\boldsymbol{\mu}-\boldsymbol{r}),\mathbf{C\Sigma C}^{\prime})
\\&
\mathbf{CVC}^{\prime}\sim W_{p}(n-1,\mathbf{C\Sigma C}^{\prime}),
\\&
故n(n-1)(\mathbf{C}\overline{\boldsymbol{x}}-\boldsymbol{r})^{\prime}(\mathbf{CVC}^{\prime})^{-1}(\mathbf{C}\overline{\boldsymbol{x}}-\boldsymbol{r})\sim T^{2}\left(p,n-1,\sqrt{n}(\mathbf{C}\boldsymbol{\mu}-\boldsymbol{r})\right).
\\&
令T^{2}=n(n-1)(\mathbf{C}\overline{\boldsymbol{x}}-\boldsymbol{r})^{\prime}(\mathbf{CVC}^{\prime})^{-1}(\mathbf{C}\overline{\boldsymbol{x}}-\boldsymbol{r})为其检验统计量,服从非中心T^{2}分布.
\\&
另\frac{n-p-1}{(n-2)p}T^{2}\sim F_{p,n-p-1}(\delta)也可作为检验统计量,服从非中心F分布,
\\&
其中\delta=n(n-1)(\mathbf{C}\boldsymbol{\mu}-\boldsymbol{r})^{\prime}(\mathbf{C\Sigma C}^{\prime})^{-1}(\mathbf{C}\boldsymbol{\mu}-\boldsymbol{r}).
\end{aligned}\end{equation}
$$

## 5.
>[!note] 
>设$\boldsymbol{x}_{1},\cdots,\boldsymbol{x}_{n}$为来自总体$\boldsymbol{X}\sim N_{p}(\boldsymbol{\mu},\boldsymbol{\Sigma})$的独立同分布的简单随机样本,其中$\boldsymbol{\mu}=(\mu_{1},\cdots,\mu_{p})$,$\boldsymbol{\Sigma}>0$和$n>p$.记样本均值为$\overline{\boldsymbol{x}}$,样本离差阵为$\mathbf{V}$.考虑下面的假设问题:
>$$H_{0}:\mu_{1}=\mu_{2}=\cdots=\mu_{p},\qquad H_{1}:\mu_{1},\cdots,\mu_{2},\cdots,\mu_{p}至少有一对不相等.$$
>令$\mathbf{C}$为$(p-1)\times p$的矩阵,记为$$\mathbf{C}=\begin{pmatrix}  1&-1&0&\cdots&0\\1&0&-1&\cdots&0\\\vdots&\vdots&\vdots&&\vdots&\\1&0&0&\cdots&-1\end{pmatrix}.$$
>则上面的假设等价于$$H_{0}:\mathbf{C}\boldsymbol{\mu}=\boldsymbol{0}_{p-1},\qquad H_{1}:\mathbf{C}\boldsymbol{\mu}\neq\boldsymbol{0}_{p-1},$$
>其中$\boldsymbol{0}_{p-1}$为$p-1$的零向量.试求检验$H_{0}$的似然比统计量及其分布.

$$
\begin{equation} \begin{aligned}
Sol&.由4.可知\mathrm{Hotelling\ } T^{2}统计量T^{2}=n(n-1)(\mathbf{C}\overline{\boldsymbol{x}})^{\prime}(\mathbf{CVC}^{\prime})^{-1}(\mathbf{C}\overline{\boldsymbol{x}})\sim T^{2}(p,n-1,\sqrt{n}\mathbf{C}\boldsymbol{\mu}).类似地,
\\&
\frac{n-p-1}{(n-2)p}T^{2}\sim F_{p,n-p-1}(\delta)也可作为检验统计量,
其中\delta=n(n-1)\boldsymbol{\mu}^{\prime}\mathbf{C}^{\prime}(\mathbf{C\Sigma C}^{\prime})^{-1}\mathbf{C}\boldsymbol{\mu}.
\end{aligned}\end{equation}
$$

## 8.
>[!note] 
>对两个$p$元正态总体$N_{p}(\boldsymbol{\mu}_{1},\mathbf{\Sigma})$和$N_{p}(\boldsymbol{\mu}_{2},\mathbf{\Sigma}),\mathbf{\Sigma}$均值向量的检验问题,试用似然比原理导出检验$H_{0}:\boldsymbol{\mu_{1}}=\boldsymbol{\mu}_{2}$的似然比统计量及其分布.

$$
\begin{equation} \begin{aligned}
Sol&.设\boldsymbol{x}_{1},\cdots,\boldsymbol{x}_{n}与\boldsymbol{y}_{1},\cdots\boldsymbol{y}_{m}分别为来自总体N_{p}(\boldsymbol{\mu}_{1},\boldsymbol{\Sigma})与N_{p}(\boldsymbol{\mu}_{2},\boldsymbol{\Sigma})的独立同分布的简单随机样本.
\\&
f(\boldsymbol{x}_{1},\cdots,\boldsymbol{x}_{n},\boldsymbol{y}_{1},\cdots\boldsymbol{y}_{m})
\\&
=\frac{1}{(2\pi)^{\frac{(n+m)p}{2}}\lvert\mathbf{\Sigma}\rvert^{\frac{n+m}{2}}}\mathrm{etr}\left\{-\frac{1}{2}\mathbf{\Sigma}^{-1}\left(\sum^{n}_{i=1}(\boldsymbol{x}_{i}-\boldsymbol{\mu}_{1})(\boldsymbol{x}_{i}-\boldsymbol{\mu}_{1})^{\prime}+\sum^{m}_{i=1}(\boldsymbol{y}_{i}-\boldsymbol{\mu}_{2})(\boldsymbol{y}_{i}-\boldsymbol{\mu}_{2})^{\prime}\right)\right\}
\\&
\lambda=\frac{\sup\limits_{\boldsymbol{\mu}_{1}=\boldsymbol{\mu}_{2}}f(\boldsymbol{x}_{1},\cdots,\boldsymbol{x}_{n},\boldsymbol{y}_{1},\cdots\boldsymbol{y}_{m})}{\sup\limits_{\boldsymbol{\mu}_{1},\boldsymbol{\mu}_{2}}f(\boldsymbol{x}_{1},\cdots,\boldsymbol{x}_{n},\boldsymbol{y}_{1},\cdots\boldsymbol{y}_{m})}.
由4.\sup\limits_{\boldsymbol{\mu}_{1},\boldsymbol{\mu}_{2}}f(\boldsymbol{x}_{1},\cdots,\boldsymbol{x}_{n},\boldsymbol{y}_{1},\cdots\boldsymbol{y}_{m})=\frac{1}{\left(\frac{2\mathrm{e}\pi}{n+m}\right)^{\frac{(n+m)p}{2}}\lvert\mathbf{V}_{1}+\mathbf{V}_{2}\rvert^{\frac{n+m}{2}}}.
\\&
其中\mathbf{V}_{1}=\sum^{n}_{i=1}(\boldsymbol{x}_{i}-\overline{\boldsymbol{x}})(\boldsymbol{x}_{i}-\overline{\boldsymbol{x}})^{\prime},\mathbf{V}_{2}=\sum^{m}_{i=1}(\boldsymbol{y}_{i}-\overline{\boldsymbol{y}})(\boldsymbol{y}_{i}-\overline{\boldsymbol{y}})^{\prime}.
\\&
当\boldsymbol{\mu}_{1}=\boldsymbol{\mu}_{2}=\boldsymbol{\mu}时,
\\&
\ln f^{\prime}=-(n+m)\ln\lvert\mathbf{\Sigma}\rvert-\mathrm{tr}\left({\mathbf{\Sigma}}^{-1}(\mathbf{V}_{1}+\mathbf{V}_{2})\right)-n(\overline{\boldsymbol{x}}-\boldsymbol{\mu})^{\prime}{\mathbf{\Sigma}}^{-1}(\overline{\boldsymbol{x}}-\boldsymbol{\mu})-m(\overline{\boldsymbol{y}}-\boldsymbol{\mu})^{\prime}{\mathbf{\Sigma}}^{-1}(\overline{\boldsymbol{y}}-\boldsymbol{\mu})
\\&
令\frac{\partial\ln f^{\prime}}{\partial\boldsymbol{\mu}}=n(\overline{\boldsymbol{x}}-\boldsymbol{\mu})+m(\overline{\boldsymbol{y}}-\boldsymbol{\mu})=0,得\widehat{\boldsymbol{\mu}}=\frac{n\overline{\boldsymbol{x}}+m\overline{\boldsymbol{y}}}{n+m},\frac{\partial^{2}\ln f^{\prime}}{\partial\boldsymbol{\mu}^{\prime}\partial\boldsymbol{\mu}}=-(n+m)\mathbf{I}_{p}<0,
\\&
故取\boldsymbol{\mu}=\widehat{\boldsymbol{\mu}}时,\ln f^{\prime}=-(n+m)\ln\lvert\mathbf{\Sigma}\rvert-\mathrm{tr}\left({\mathbf{\Sigma}}^{-1}(\mathbf{V}_{1}+\mathbf{V}_{2})\right)-\frac{nm}{n+m}(\overline{\boldsymbol{x}}-\overline{\boldsymbol{y}})^{\prime}\mathbf{\Sigma}^{-1}(\overline{\boldsymbol{x}}-\overline{\boldsymbol{y}})为极大值
\\&
令\frac{\partial\ln f^{\prime}}{\partial\mathbf{\Sigma}}=-(n+m)\mathbf{\Sigma}^{-1}+(\mathbf{V}_{1}+\mathbf{V}_{2})\mathbf{\Sigma}^{-2}+\frac{nm}{n+m}(\overline{\boldsymbol{x}}-\overline{\boldsymbol{y}})(\overline{\boldsymbol{x}}-\overline{\boldsymbol{y}})^{\prime}\mathbf{\Sigma}^{-2}=0,
\\&
\widehat{\mathbf{\Sigma}}=\frac{\mathbf{V}_{1}+\mathbf{V}_{2}}{n+m}+\frac{nm}{(n+m)^2}(\overline{\boldsymbol{x}}-\overline{\boldsymbol{y}})(\overline{\boldsymbol{x}}-\overline{\boldsymbol{y}})^{\prime},
\\&
从而\sup\limits_{\boldsymbol{\mu}_{1}=\boldsymbol{\mu}_{2}}f(\boldsymbol{x}_{1},\cdots,\boldsymbol{x}_{n},\boldsymbol{y}_{1},\cdots\boldsymbol{y}_{m})=\frac{1}{\left(\frac{2\mathrm{e}\pi}{n+m}\right)^{\frac{(n+m)p}{2}}\lvert\mathbf{V}_{1}+\mathbf{V}_{2}+\frac{nm}{n+m}(\overline{\boldsymbol{x}}-\overline{\boldsymbol{y}})(\overline{\boldsymbol{x}}-\overline{\boldsymbol{y}})^{\prime}\rvert^{\frac{n+m}{2}}},
\\&
\lambda=\frac{1}{\lvert\mathbf{I}_{p}+\frac{nm}{n+m}(\overline{\boldsymbol{x}}-\overline{\boldsymbol{y}})^{\prime}(\overline{\boldsymbol{x}}-\overline{\boldsymbol{y}})(\mathbf{V}_{1}+\mathbf{V}_{2})^{-1}\rvert^{\frac{n+m}{2}}}=\left(1+\frac{nm}{n+m}(\overline{\boldsymbol{x}}-\overline{\boldsymbol{y}})(\mathbf{V}_{1}+\mathbf{V}_{2})^{-1}(\overline{\boldsymbol{x}}-\overline{\boldsymbol{y}})^{\prime}\right)^{-\frac{n+m}{2}}.
\\&
\lambda为似然比统计量,进一步,
\\&
已知\overline{\boldsymbol{x}}\sim N_{p}(\boldsymbol{\mu}_{1},\overline{\boldsymbol{y}}\sim N_{p}(\boldsymbol{\mu}_{2},\mathbf{\Sigma}/n),\mathbf{V}_{1}\sim W_{p}(n-1,\mathbf{\Sigma}),\mathbf{V}_{2}\sim W_{p}(m-1,\mathbf{\Sigma}),
\\&
则\sqrt{\frac{nm}{n+m}}(\overline{\boldsymbol{x}}-\overline{\boldsymbol{y}})\sim N_{p}\left(\sqrt{\frac{nm}{n+m}}(\boldsymbol{\mu}_{1}-\boldsymbol{\mu}_{2}),\mathbf{\Sigma}\right),\mathbf{V}_{1}+\mathbf{V}_{2}\sim W_{p}(n+m-2,\mathbf{\Sigma}).
\\&
令T^{2}=\frac{(n+m-2)nm}{n+m}(\overline{\boldsymbol{x}}-\overline{\boldsymbol{y}})(\overline{\boldsymbol{x}}-\overline{\boldsymbol{y}})^{\prime}\sim T^{2}\left(p,n+m-2,\sqrt{\frac{nm}{n+m}}(\boldsymbol{\mu}_{1}-\boldsymbol{\mu}_{2})\right)
\\&
另\frac{n+m-p-2}{p(n+m-3)}T^{2}\sim F_{p,n+m-p-2}(\delta),其中\delta=\frac{(n+m-2)nm}{n+m}(\boldsymbol{\mu}_{1}-\boldsymbol{\mu}_{2})^{\prime}\mathbf{\Sigma}^{-1}(\boldsymbol{\mu}_{1}-\boldsymbol{\mu}_{2}).
\end{aligned}\end{equation}
$$

## 11.
>[!note] 
>某项研究确定运功或膳食补充是否会减缓妇女的骨质流失,研究人员通过光子吸收法测量了实验前和实验1年后骨骼中的矿物质含量.表$6.8$是对参与该项目实验前$25$个个体和参与该项目实验$1$年后$24$个个体骨骼中的矿物质含量数据,记录了$3$个骨骼主力侧和非主力侧上矿物质含量,其中$X_{1}$表示主力侧的桡骨、$X_{2}$表示桡骨、$X_{3}$表示主力侧的肱骨、$X_{4}$表示肱骨、$X_{5}$表示主力侧的尺骨、$X_{6}$表示尺骨中矿物质的含量.假设$\boldsymbol{X}=(X_{1},\cdots,X_{6})^{\prime}\sim N_{6}(\boldsymbol{\mu},\mathbf{\Sigma}).$
>(1)分别绘制实验前数据和实验1年后数据的矩阵散点图；
>(2)给定显著性水平$\alpha=0.5$,检验经过实验后骨骼中的矿物质是否有流失?;
>(3)构造均值差$95\%$的同时置信区间和$\mathrm{Bonferroni}$置信区间;
>(4)给定显著性水平$\alpha=0.5$，分别对实验前和实验后的数据进行独立性检验.首先对随机向量$\boldsymbol{X}$和协方差矩阵$\mathbf{\Sigma}$进行如下剖分:$$\boldsymbol{X}=\begin{pmatrix} \boldsymbol{X}^{(1)} \\\boldsymbol{X}^{(2)}\\\boldsymbol{X}^{(3)}\end{pmatrix},\quad\boldsymbol{\mu}=\begin{pmatrix} \boldsymbol{\mu}^{(1)} \\\boldsymbol{\mu}^{(2)}\\\boldsymbol{\mu}^{(3)} \end{pmatrix},\quad\mathbf{\Sigma}=\begin{pmatrix} \mathbf{\Sigma}_{11}&\mathbf{\Sigma}_{12}&\mathbf{\Sigma}_{13}\\\mathbf{\Sigma}_{21}&\mathbf{\Sigma}_{22}&\mathbf{\Sigma}_{23}\\\mathbf{\Sigma}_{31}&\mathbf{\Sigma}_{32}&\mathbf{\Sigma}_{33} \end{pmatrix},$$
>其中$\boldsymbol{X}^{(1)}=(X_{1},X_{2})^{\prime},\boldsymbol{X}^{(2)}=(X_{3},X_{4})^{\prime},\boldsymbol{X}^{(3)}=(X_{5},X_{6})^{\prime}$.考虑如下的检验问题:$$H_{0}:\mathbf{\Sigma}_{12}=\boldsymbol{0},\mathbf{\Sigma}_{13}=\boldsymbol{0},\mathbf{\Sigma}_{23}=\boldsymbol{0},\qquad H_{1}:\mathbf{\Sigma}_{12},\mathbf{\Sigma}_{13},\mathbf{\Sigma}_{23}不全为\boldsymbol{0}矩阵.$$

$$表6.8 骨骼中的矿物质含量数据$$

| $X_{1}$ | $X_{2}$ | $X_{3}$ | $X_{4}$ | $X_{5}$ | $X_{6}$ | $X_{1}$ | $X_{2}$ | $X_{3}$ | $X_{4}$ | $X_{5}$ | $X_{6}$ |
| :-----: | :-----: | :-----: | :-----: | :-----: | :-----: | :-----: | :-----: | :-----: | :-----: | :-----: | ------- |
|  1.103  |  1.052  |  2.139  |  2.238  |  0.873  |  0.872  |  1.027  |  1.051  |  2.268  |  2.246  |  0.869  | 0.964   |
|  0.842  |  0.859  |  1.873  |  1.741  |  0.590  |  0.744  |  0.857  |  0.817  |  1.718  |  1.710  |  0.602  | 0.689   |
|  0.925  |  0.873  |  1.887  |  1.809  |  0.767  |  0.713  |  0.875  |  0.880  |  1.953  |  1.756  |  0.765  | 0.738   |
|  0.857  |  0.744  |  1.739  |  1.547  |  0.706  |  0.674  |  0.873  |  0.698  |  1.668  |  1.443  |  0.761  | 0.698   |
|  0.795  |  0.809  |  1.734  |  1.715  |  0.549  |  0.654  |  0.811  |  0.813  |  1.643  |  1.661  |  0.551  | 0.619   |
|  0.787  |  0.779  |  1.509  |  1.474  |  0.782  |  0.571  |  0.640  |  0.734  |  1.396  |  1.378  |  0.753  | 0.515   |
|  0.933  |  0.880  |  1.695  |  1.656  |  0.737  |  0.803  |  0.947  |  0.865  |  1.851  |  1.686  |  0.708  | 0.787   |
|  0.799  |  0.851  |  1.740  |  1.777  |  0.618  |  0.682  |  0.886  |  0.806  |  1.742  |  1.815  |  0.687  | 0.715   |
|  0.945  |  0.876  |  1.811  |  1.759  |  0.853  |  0.777  |  0.991  |  0.923  |  1.931  |  1.776  |  0.844  | 0.656   |
|  0.921  |  0.906  |  1.954  |  2.009  |  0.823  |  0.765  |  0.977  |  0.925  |  1.933  |  2.106  |  0.869  | 0.789   |
|  0.792  |  0.825  |  1.624  |  1.657  |  0.686  |  0.668  |  0.825  |  0.826  |  1.609  |  1.651  |  0.654  | 0.726   |
|  0.815  |  0.751  |  2.204  |  1.846  |  0.678  |  0.546  |  0.851  |  0.765  |  2.352  |  1.980  |  0.692  | 0.526   |
|  0.755  |  0.724  |  1.508  |  1.458  |  0.662  |  0.595  |  0.770  |  0.730  |  1.470  |  1.420  |  0.670  | 0.580   |
|  0.880  |  0.866  |  1.786  |  1.811  |  0.810  |  0.819  |  0.912  |  0.875  |  1.846  |  1.809  |  0.823  | 0.773   |
|  0.900  |  0.838  |  1.902  |  1.606  |  0.723  |  0.677  |  0.905  |  0.826  |  1.842  |  1.579  |  0.746  | 0.729   |
|  0.764  |  0.757  |  1.743  |  1.794  |  0.586  |  0.541  |  0.756  |  0.727  |  1.747  |  1.860  |  0.656  | 0.506   |
|  0.733  |  0.748  |  1.863  |  1.869  |  0.672  |  0.752  |  0.765  |  0.764  |  1.923  |  1.941  |  0.693  | 0.740   |
|  0.932  |  0.898  |  2.028  |  2.032  |  0.836  |  0.805  |  0.932  |  0.914  |  2.190  |  1.997  |  0.883  | 0.785   |
|  0.856  |  0.786  |  1.390  |  1.324  |  0.578  |  0.610  |  0.843  |  0.782  |  1.242  |  1.228  |  0.577  | 0.627   |
|  0.890  |  0.950  |  2.187  |  2.087  |  0.758  |  0.718  |  0.879  |  0.906  |  2.164  |  1.999  |  0.802  | 0.769   |
|  0.688  |  0.532  |  1.650  |  1.378  |  0.533  |  0.482  |  0.673  |  0.537  |  1.573  |  1.330  |  0.540  | 0.498   |
|  0.940  |  0.850  |  2.334  |  2.225  |  0.757  |  0.731  |  0.949  |  0.900  |  2.130  |  2.159  |  0.804  | 0.779   |
|  0.493  |  0.616  |  1.037  |  1.268  |  0.546  |  0.615  |  0.463  |  0.637  |  1.041  |  1.265  |  0.570  | 0.634   |
|  0.835  |  0.752  |  1.509  |  1.422  |  0.618  |  0.664  |  0.776  |  0.743  |  1.442  |  1.411  |  0.585  | 0.640   |
|  0.915  |  0.936  |  1.971  |  1.869  |  0.869  |  0.868  |         |         |         |         |         |         |


## 14
>[!note] 
>自己设计一个模拟例子,编写程序,对$6.5.2$节介绍的球形检验问题进行模拟研究.