# 习题3
## 7
>[!note]  
>设$X^{(1)}$和$X^{(2)}$为$p$维随机向量,且
>$$
>X=\begin{pmatrix} X^{(1)} \\  X^{(2)} \end{pmatrix}\sim N_{2p}\begin{pmatrix} \begin{pmatrix}\mu^{(1)}\\ \mu^{(2)} \end{pmatrix},\begin{pmatrix} \mathbf{\Sigma}_1 & \mathbf{\Sigma}_2 \\  \mathbf{\Sigma}_2 & \mathbf{\Sigma}_1 \end{pmatrix}\end{pmatrix}
>$$
>其中$\mu^{(1)}$和 $\mu^{(2)}$为$p$维列向量,$\mathbf{\Sigma}_1$和$\mathbf{\Sigma}_2$为p阶正定矩阵,
>(1)试证$X^{(1)}+X^{(2)}$与$X^{(1)}-X^{(2)}$相互独立;
>(2)试求$X^{(1)}+X^{(2)}$与$X^{(1)}-X^{(2)}$的分布.

$$
\begin{equation} \begin{aligned}
Proof.&(1)已知\mathbb{E}\left[X^{(i)}\right]=\mu^{(i)},\mathrm{Cov}\left(X^{(i)},X^{(i)}\right)=\mathbb{E} \left[X^{(i)}\right]=\mathbf{\Sigma}_1,i=1,2,
\\&
\mathrm{Cov}\left(X^{(1)},X^{(2)}\right)=\mathrm{Cov}\left(X^{(2)},X^{(1)}\right)=\mathbf{\Sigma}_2.
\\&
则\mathrm{Cov}\left(X^{(1)}+X^{(2)},X^{(1)}-X^{(2)}\right) 
\\&
=\mathrm{Cov}\left(X^{(1)},X^{(1)}\right)-\mathrm{Cov}\left(X^{(2)},X^{(2)}\right)+\mathrm{Cov}\left(X^{(2)},X^{(1)}\right)
-\mathrm{Cov}\left(X^{(1)},X^{(2)}\right)
\\&
=\mathbf{\Sigma}_1-\mathbf{\Sigma}_1+\mathbf{\Sigma}_2-\mathbf{\Sigma}_2=0
\\&
又X^{(1)}+X^{(2)}与X^{(1)}-X^{(2)}都为X的一个线性组合,则服从正态分布，
\\&
因此, X^{(1)}+X^{(2)}和X^{(1)}-X^{(2)}相互独立.
\\&
(2)由已知,\mathbb{E} \left[X^{(1)}+X^{(2)}\right]=\mu^{(1)}+\mu^{(2)},\mathbb{E} \left[X^{(1)}-X^{(2)}\right]=\mu^{(1)}-\mu^{(2)},
\\&
\mathrm{Var}\left(X^{(1)}+X^{(2)}\right)=\mathrm{Var}\left(X^{(1)}\right)+\mathrm{Var}\left(X^{(2)}\right)+\mathrm{Cov}\left(X^{(1)},X^{(2)}\right)+\mathrm{Cov}\left(X^{(2)},X^{(1)}\right)
\\&
=2\mathbf{\Sigma}_1+2\mathbf{\Sigma}_2,同理,\mathrm{Var}\left(X^{(1)}-X^{(2)}\right)=2\mathbf{\Sigma}_1-2\mathbf{\Sigma}_2
\\&
X^{(1)}+X^{(2)}\sim N\left(\mu^{(1)}+\mu^{(2)},2\mathbf{\Sigma}_1+2\mathbf{\Sigma}_2\right),X^{(1)}-X^{(2)}\sim N\left(\mu^{(1)}-\mu^{(2)},2\mathbf{\Sigma}_1-2\mathbf{\Sigma}_2\right)
\end{aligned} \end{equation}.
$$
## 8
>[!note]  
>设$X\sim N_p\left(\mu,\mathbf{\Sigma}\right),\mathbf{\Sigma}>0,$对$\mu$和$\mathbf{\Sigma}$作如下剖分：
>$$
>\mu=\begin{pmatrix} \mu^{(1)} \\  \mu^{(2)} \end{pmatrix},\mathbf{\Sigma}=\begin{pmatrix} \mathbf{\Sigma}_{11} & \mathbf{\Sigma}_{12} \\  \mathbf{\Sigma}_{21} & \mathbf{\Sigma}_{22} \end{pmatrix}
>$$
>其中$\mu^{(1)}$为$r$维列向量，$\mathbf{\Sigma}_{11}$为$r$维方阵，$1\leqslant r<p$.
>(1)试证明:$\mu^{\prime}\mathbf{\Sigma}^{-1}\mu\geqslant{\left(\mu^{(1)}\right)}^{\prime}\mathbf{\Sigma}^{-1}_{11}\mu^{(1)}$;
>(2)试证明:$X^{(2)}|X^{(1)}=x^{(1)}\sim N_{p-r}(\mu_{2.1},\mathbf{\Sigma}_{22.1}$,其中$\mu_{2.1}=\mu^{(2)}+\mathbf{\Sigma}_{21}\mathbf{\Sigma}^{-1}_{11}\left(x^{(1)}-\mu^{(1)}\right)$和$\mathbf{\Sigma}_{22.1}=\mathbf{\Sigma}_{22}-\mathbf{\Sigma}_{21}\mathbf{\Sigma}^{-1}_{11}\mathbf{\Sigma}_{12}$.
>


$$
\begin{equation} \begin{aligned}
Proof.&(1)
已知\mathbf{\Sigma}^{-1}=\begin{pmatrix}\mathbf{\Sigma}^{-1}_{11}+\mathbf{\Sigma}^{-1}_{11}\mathbf{\Sigma}_{12}\mathbf{\Sigma}^{-1}_{22.1}\mathbf{\Sigma}_{21}\mathbf{\Sigma}^{-1}_{11} & -\mathbf{\Sigma}^{-1}_{11}\mathbf{\Sigma}_{12}\mathbf{\Sigma}^{-1}_{22.1} \\ \mathbf{\Sigma}^{-1}_{22.1}\mathbf{\Sigma}_{21}\mathbf{\Sigma}^{-1}_{11} & \mathbf{\Sigma}^{-1}_{22.1}\end{pmatrix}
,要证\mu^{\prime}\mathbf{\Sigma}^{-1}\mu-{\left(\mu^{(1)}\right)}^{\prime}\mathbf{\Sigma}^{-1}_{11}\mu^{(1)}\geqslant0,
\\&
即证\mu^{\prime}\mathbf{\Sigma}^{-1}\mu-{\left(\mu^{(1)}\right)}^{\prime}\mathbf{\Sigma}^{-1}_{11}\mu^{(1)}
\\&
={\begin{pmatrix} \mu^{(1)} \\  \mu^{(2)} \end{pmatrix}}^{\prime}\begin{pmatrix}\mathbf{\Sigma}^{-1}_{11}+\mathbf{\Sigma}^{-1}_{11}\mathbf{\Sigma}_{12}\mathbf{\Sigma}^{-1}_{22.1}\mathbf{\Sigma}_{21}\mathbf{\Sigma}^{-1}_{11} & -\mathbf{\Sigma}^{-1}_{11}\mathbf{\Sigma}_{12}\mathbf{\Sigma}^{-1}_{22.1} \\ \mathbf{\Sigma}^{-1}_{22.1}\mathbf{\Sigma}_{21}\mathbf{\Sigma}^{-1}_{11} & \mathbf{\Sigma}^{-1}_{22.1}\end{pmatrix}\begin{pmatrix} \mu^{(1)} \\  \mu^{(2)} \end{pmatrix}-{\left(\mu^{(1)}\right)}^{\prime}\mathbf{\Sigma}^{-1}_{11}\mu^{(1)}
\\&
={\left(\mathbf{\Sigma}_{21}\mathbf{\Sigma}^{-1}_{11}\mu^{(1)}-\mu^{(2)}\right)}^{\prime}\mathbf{\Sigma}^{-1}_{22.1}\left(\mathbf{\Sigma}_{21}\mathbf{\Sigma}^{-1}_{11}\mu^{(1)}-\mu^{(2)}\right)\geqslant0
\\&
因此我们只需说明\mathbf{\Sigma}^{-1}_{22.1}=\mathbf{\Sigma}_{22}-\mathbf{\Sigma}_{21}\mathbf{\Sigma}^{-1}_{11}\mathbf{\Sigma}_{12}半正定即可.事实上
\\&
\mathbf{\Sigma}=\begin{pmatrix} \mathbf{\Sigma}_{11} & \mathbf{\Sigma}_{12} \\  \mathbf{\Sigma}_{21} & \mathbf{\Sigma}_{22} \end{pmatrix}\backsimeq\begin{pmatrix} \mathbf{\Sigma}_{11} & 0 \\  0 & \mathbf{\Sigma}_{22}-\mathbf{\Sigma}_{21}\mathbf{\Sigma}^{-1}_{11}\mathbf{\Sigma}_{12} \end{pmatrix}且\mathbf{\Sigma}正定,从而\mathbf{\Sigma}^{-1}_{22.1}=\mathbf{\Sigma}_{22}-\mathbf{\Sigma}_{21}\mathbf{\Sigma}^{-1}_{11}\mathbf{\Sigma}_{12}正定
\\&
故原命题得证.
\\&
(2)作变换Y=\begin{pmatrix}Y^{(1)}\\ Y^{(2)}\end{pmatrix}=\begin{pmatrix}\mathbf{I}_r & 0 \\ -\mathbf{\Sigma}_{21}\mathbf{\Sigma}^{-1}_{11} & \mathbf{I}_{P-r}\end{pmatrix}\begin{pmatrix}X^{(1)}\\ X^{(2)}\end{pmatrix}=\begin{pmatrix}X^{(1)}\\ -\mathbf{\Sigma}_{21}\mathbf{\Sigma}^{-1}_{11}X^{(1)}+X^{(2)}\end{pmatrix}
\\&
故\mathbb{E}\left[Y\right]=\begin{pmatrix}\mu^{(1)}\\ -\mathbf{\Sigma}_{21}\mathbf{\Sigma}^{-1}_{11}\mu^{(1)}+\mu^{(2)}\end{pmatrix},\mathrm{Var}(Y)=\begin{pmatrix}\mathbf{I}_r & 0 \\ -\mathbf{\Sigma}_{21}\mathbf{\Sigma}^{-1}_{11} & \mathbf{I}_{P-r}\end{pmatrix}\mathbf{\Sigma}{\begin{pmatrix}\mathbf{I}_r & 0 \\ -\mathbf{\Sigma}_{21}\mathbf{\Sigma}^{-1}_{11} & \mathbf{I}_{P-r}\end{pmatrix}}^{\prime}
\\&=\begin{pmatrix}\mathbf{\Sigma}_{11} & 0 \\ 0 & \mathbf{\Sigma}_{22}-\mathbf{\Sigma}_{21}\mathbf{\Sigma}^{-1}_{11}\mathbf{\Sigma}_{12}\end{pmatrix}=\begin{pmatrix}\mathbf{\Sigma}_{11} & 0 \\ 0 & \mathbf{\Sigma}_{22.1}\end{pmatrix},
\\&
从而Y^{(1)}与Y^{(2)}独立，Y的密度函数为f(Y)=f(Y^{(1)})f(Y^{(2)})
\\&
=\frac{1}{(2\pi)^{r/2}{\lvert\mathbf{\Sigma}_{11}\rvert}^{1/2}}\exp\left\{-\frac{1}{2}\left(Y^{(1)}-\mu^{(1)}\right)^{\prime}\mathbf{\Sigma}^{-1}_{11}\left(Y^{(1)}-\mu^{(1)}\right)\right\}
\\&
\times\frac{1}{(2\pi)^{(p-r)/2}{\lvert\mathbf{\Sigma}_{22.1}\rvert}^{1/2}}\exp\left\{-\frac{1}{2}\left(Y^{(2)}-\mu^{(2)}+\mathbf{\Sigma}_{21}\mathbf{\Sigma}^{-1}_{11}\mu^{(1)}\right)^{\prime}\mathbf{\Sigma}^{-1}_{22.1}\left(Y^{(2)}-\mu^{(2)}+\mathbf{\Sigma}_{21}\mathbf{\Sigma}^{-1}_{11}\mu^{(1)}\right)\right\},
\\&
故f\left(X\right)=f\left(X^{(1)},X^{(2)}\right)\cdot \lvert \mathbf{J}\rvert^{-1}=\frac{1}{(2\pi)^{r/2}{\lvert\mathbf{\Sigma}_{11}\rvert}^{1/2}}\exp\left\{-\frac{1}{2}\left(X^{(1)}-\mu^{(1)}\right)^{\prime}\mathbf{\Sigma}^{-1}_{11}\left(X^{(1)}-\mu^{(1)}\right)\right\}
\\&
\times\frac{1}{(2\pi)^{(p-r)/2}{\lvert\mathbf{\Sigma}_{22.1}\rvert}^{1/2}}
\\&
\cdot\exp\left\{-\frac{1}{2}\left(X^{(2)}-\mu^{(2)}-\mathbf{\Sigma}_{21}\mathbf{\Sigma}^{-1}_{11}\left(X^{(1)}-\mu^{(1)}\right)\right)^{\prime}\mathbf{\Sigma}^{-1}_{22.1}\left(X^{(2)}-\mu^{(2)}-\mathbf{\Sigma}_{21}\mathbf{\Sigma}^{-1}_{11}\left(X^{(1)}-\mu^{(1)}\right)\right)\right\}
\\&
又f(X^{(2)}|X^{(1)})=\frac{f\left(X^{(1)},X^{(2)}\right)}{f\left(X^{(1)}\right)},注意到,f\left(X^{(1)}\right)为上式的前半部分,后半部分即f(X^{(2)}|X^{(1)}),
\\&
故X^{(2)}|X^{(1)}=x^{(1)}\sim N_{p-r}\left(\mu^{(2)}+\mathbf{\Sigma}_{21}\mathbf{\Sigma}^{-1}_{11}(x^{(1)}-\mu^{(1)}),\mathbf{\Sigma}_{22.1}\right).
\end{aligned}\end{equation}
$$

## 14
>[!note] 
>令$X_1,\cdots,X_n$是相互独立的,且$X_i\sim N\left(\beta+\gamma z_i,\sigma^2\right)$,其中$z_i$是给定的常数,$i=1,\cdots,n$,且$\sum\limits^{n}_{i=1}z_i=0$.
>(1)求$(X_1,\cdots,X_n)^{\prime}$的分布;
>(2)求$\overline{X}=\frac{1}{n}\sum\limits^{n}_{i=1}X_i$和$Y=\sum\limits^n_{i=1}z_i X_i\Big/\sum\limits^n_{i=1}z^2_i$的分布，其中$\sum\limits^n_{i=1}z^2_i>0$.

$$
\begin{equation} \begin{aligned}
Sol.&(1)由X_1,\cdots,X_n相互独立,(X_1,\cdots,X_n)^{\prime}\sim N_p\left(\beta\mathbb{1}_n+\gamma z,\sigma^2\mathbf{I}_n\right),其中\mathbb{1}_n表示元素全为1的n\times1矩阵,
\\&
z=(z_1,\cdots,z_n)^{\prime}.
\\&
(2)由正态分布的可加性及\sum^n_{i=1}z_i=0,\sum\limits^{n}_{i=1}X_i\sim N\left(n\beta+\gamma\sum^n_{i=1}z_i,n\sigma^2\right),则\overline{X}=\frac{1}{n}\sum^n_{i=1}X_i\sim N\left(\beta,\frac{\sigma^2}{n}\right)
\\&
\sum^n_{i=1}z_iX_i\sim N\left(\beta\sum^n_{i=1}z_i+\gamma\sum^n_{i=1}z^2_i,\sigma^2\sum^n_{i=1}z^2_i\right),则Y=\sum\limits^n_{i=1}z_i X_i\Big/\sum\limits^n_{i=1}z^2_i\sim N\left(\gamma,\sigma^2\Big/\sum^n_{i=1}z^2_i\right)
\end{aligned}\end{equation}
$$

## 19
>[!note] 
>令$a=(-4,3)^{\prime}$和$b=(1,1)^{\prime}$,以及$\mathbf{A}=\begin{pmatrix}2&-2\\-2&5\end{pmatrix}$,试验证推广的$\mathrm{Cauchy-Schwarz}不等式$:$(a^{\prime}b)^2\leqslant(a^{\prime}\mathbf{A}a)(b^{\prime}\mathbf{A}^{-1}b)$.

$$
\begin{equation} \begin{aligned}
Sol.&(1)a^{\prime}b=(-4,3)\begin{pmatrix}1\\1\end{pmatrix}=-1,(a^{\prime}b)^2=1,\mathbf{A}^{-1}=\begin{pmatrix}\frac{5}{6} & \frac{1}{3} \\ \frac{1}{3} & \frac{1}{3}\end{pmatrix},
\\&
a^{\prime}\mathbf{A}a=(-4,3)\begin{pmatrix}2&-2\\-2&5\end{pmatrix}\begin{pmatrix}-4\\3\end{pmatrix}=(-14,23)\begin{pmatrix}-4\\3\end{pmatrix}=125,b^{\prime}\mathbf{A}^{-1}b=(1,1)\begin{pmatrix}\frac{5}{6} & \frac{1}{3} \\ \frac{1}{3} & \frac{1}{3}\end{pmatrix}\begin{pmatrix}1\\1\end{pmatrix}==\frac{11}{6},
\\&
(a^{\prime}\mathbf{A}a)(b^{\prime}\mathbf{A}^{-1}b)=\frac{1375}{6}>1=(a^{\prime}b)^2.
\end{aligned}\end{equation}
$$

## 21
>[!note]
>证明:
>$$
>\mathbf{\Sigma}^{-1}=\begin{pmatrix}\mathbf{\Sigma}^{-1}_{11.2} & -\mathbf{\Sigma}^{-1}_{11.2}\mathbf{\Sigma}_{12}\mathbf{\Sigma}^{-1}_{22} \\ -\mathbf{\Sigma}^{-1}_{22}\mathbf{\Sigma}_{21}\mathbf{\Sigma}^{-1}_{11.2} & \mathbf{\Sigma}^{-1}_{22}\mathbf{\Sigma}_{21}\mathbf{\Sigma}^{-1}_{11.2}\mathbf{\Sigma}_{12}\mathbf{\Sigma}^{-1}_{22}+\mathbf{\Sigma}^{-1}_{22} \end{pmatrix}=\begin{pmatrix}0 & 0 \\ 0 & \mathbf{\Sigma}^{-1}_{22} \end{pmatrix}+\begin{pmatrix}\mathbf{I} \\ \beta^{\prime} \end{pmatrix}\mathbf{\Sigma}^{-1}_{11.2}(\mathbf{I},-\beta)
>$$
>其中$\beta=\mathbf{\Sigma}_{12}\mathbf{\Sigma}^{-1}_{22}$.

$$
\begin{equation} \begin{aligned}
Proof.&即证\mathbf{\Sigma}^{-1}-\begin{pmatrix}0 & 0 \\ 0 & \mathbf{\Sigma}^{-1}_{22} \end{pmatrix}=\begin{pmatrix}\mathbf{\Sigma}^{-1}_{11.2} & -\mathbf{\Sigma}^{-1}_{11.2}\mathbf{\Sigma}_{12}\mathbf{\Sigma}^{-1}_{22} \\ -\mathbf{\Sigma}^{-1}_{22}\mathbf{\Sigma}_{21}\mathbf{\Sigma}^{-1}_{11.2} & \mathbf{\Sigma}^{-1}_{22}\mathbf{\Sigma}_{21}\mathbf{\Sigma}^{-1}_{11.2}\mathbf{\Sigma}_{12}\mathbf{\Sigma}^{-1}_{22} \end{pmatrix}=\begin{pmatrix}\mathbf{I} \\ \beta^{\prime} \end{pmatrix}\mathbf{\Sigma}^{-1}_{11.2}(\mathbf{I},-\beta),事实上
\\&
\begin{pmatrix}\mathbf{I} \\ -\beta^{\prime} \end{pmatrix}\mathbf{\Sigma}^{-1}_{11.2}(I,-\beta)=\begin{pmatrix}\mathbf{I} \\ -\mathbf{\Sigma}^{-1}_{22}\mathbf{\Sigma}_{21} \end{pmatrix}\mathbf{\Sigma}^{-1}_{11.2}(\mathbf{I},-\mathbf{\Sigma}_{12}\mathbf{\Sigma}^{-1}_{22})=\begin{pmatrix}\mathbf{\Sigma}^{-1}_{11.2} \\ -\mathbf{\Sigma}_{12}\mathbf{\Sigma}^{-1}_{22}\mathbf{\Sigma}^{-1}_{11.2} \end{pmatrix}(\mathbf{I},-\mathbf{\Sigma}_{12}\mathbf{\Sigma}^{-1}_{22})
\\&
=\begin{pmatrix}\mathbf{\Sigma}^{-1}_{11.2} & -\mathbf{\Sigma}^{-1}_{11.2}\mathbf{\Sigma}_{12}\mathbf{\Sigma}^{-1}_{22} \\ -\mathbf{\Sigma}^{-1}_{22}\mathbf{\Sigma}_{21}\mathbf{\Sigma}^{-1}_{11.2} & \mathbf{\Sigma}^{-1}_{22}\mathbf{\Sigma}_{21}\mathbf{\Sigma}^{-1}_{11.2}\mathbf{\Sigma}_{12}\mathbf{\Sigma}^{-1}_{22} \end{pmatrix}.
\end{aligned}\end{equation}
$$
