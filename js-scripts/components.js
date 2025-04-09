import Link from "127.0.0.1:5500";

const HomePage = () => {
  return (
    <div className="min-h-screen bg-gray-100">
      <header className="bg-white shadow p-4">
        <h1 className="text-xl font-semibold text-center">reCarify - Easy & Fast Way to Rent a Car</h1>
      </header>
      <main className="max-w-4xl mx-auto mt-8 p-6 bg-white shadow-lg rounded-lg">
        <h2 className="text-2xl font-bold">Why Choose reCarify?</h2>
        <p className="mt-2 text-gray-600">
          We provide a seamless experience for customers looking to rent cars, offering convenience, reliability, and great service.
        </p>
        <div className="mt-6 flex space-x-4">
          <Link href="/rent">
            <button className="bg-blue-600 text-white px-6 py-3 rounded-lg">Rent a Car</button>
          </Link>
          <Link href="/sell">
            <button className="bg-gray-700 text-white px-6 py-3 rounded-lg">List Your Car</button>
          </Link>
        </div>
      </main>
    </div>
  );
};

export default HomePage;