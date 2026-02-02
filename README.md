# 🟠 OnePay QR — One QR. All Payments.

**OnePay QR** is a simple web tool that combines **NepalPay** and **FonePay** merchant QR codes into a **single unified QR image** for easier display at shops and businesses in Nepal.

> This project does **not** process payments or connect to banks.  
> It simply merges two existing merchant QR codes into one structured QR for better physical QR management.

---

## 🇳🇵 The Real-World Problem

In Nepal, merchants often need to display:

- One **NepalPay QR**
- One **FonePay QR**

Because these two systems are not interoperable, businesses usually place **two separate QR stands** at their counter.

This creates real issues:

- Cluttered checkout counters  
- Customers confused about which QR to scan  
- Slower payment flow during rush hours  
- QR stands getting lost, broken, or misplaced  

---

## 💡 The Simple Solution

Instead of changing how payment networks work, **OnePay QR simplifies how QRs are displayed**.

Merchants upload their existing:

- NepalPay QR  
- FonePay QR  

The system generates **one combined QR image** that contains both payment paths inside a single EMV-compatible structure.

Customers scan **one QR**, and their banking or wallet app reads the part it supports.

This is not a financial integration — it is a **practical QR management solution**.

---

## ⚙️ Technical Challenge

Both NepalPay and FonePay follow EMV QR standards, but they use **different merchant account tags**:

- **NepalPay → EMV Tag 29**
- **FonePay → EMV Tag 26**

Because of this difference:

- QR data must be carefully merged  
- Structure must remain EMV-compliant  
- Both apps must still detect their respective sections  
- One network can be set as **priority** in the QR structure  

This project focuses on **QR data structuring**, not payment processing.

---

## 🚀 Features

- Upload **NepalPay** merchant QR image  
- Upload **FonePay** merchant QR image  
- Client-side QR validation and preview  
- Select **priority payment network**
- Optional custom business name
- Generate a **single combined QR image** for printing or display  

---

## ❌ What This Project Does NOT Do

To avoid misunderstanding:

- ❌ Does not connect to banks  
- ❌ Does not use payment APIs  
- ❌ Does not process or track transactions  
- ❌ Does not store financial or merchant credentials  

It only **restructures and combines QR data visually into one code**.

---

## 🖥️ Tech Stack

- **Laravel (PHP)** — Backend processing  
- **JavaScript** — QR scanning & client-side validation  
- **Bootstrap 5** — UI design  
- **QR decoding & generation libraries**
- **EMV QR format handling**

---

## 🏪 Who Is This For?

This tool is useful for:

- Small retail shops  
- Cafés and restaurants  
- Street vendors  
- Local businesses using both NepalPay and FonePay  

It reduces physical QR clutter and makes payment counters cleaner and more professional.

---

## 🔒 Repository Note

This is a **demonstration repository**.

The following are intentionally excluded:

- Core QR merging algorithms  
- Production security logic  
- Deployment configurations  

The goal is to present the **concept, structure, and approach** without exposing sensitive implementation details.

---

## 👨‍💻 Developer

**Sujan Ghimire**  
Building practical digital solutions for Nepal’s evolving payment ecosystem.

---

## 🌐 Live Project

👉 https://oneqr.sparkminds.com.np

---

> **Sometimes the best solutions aren’t complex — just practical.**  
> **One stand. One QR. All payments.**
